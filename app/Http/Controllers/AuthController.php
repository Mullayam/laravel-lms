<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BasicFunction;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Mail\VerificationMail;
use App\Mail\WelcomeMail;
use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;

class AuthController extends Controller
{
    public $username;
    public $lastname;
    public function __construct()
    {
        $this->username = BasicFunction::genrateUsername();
    }
    public function SignIn()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect('/');
    }
    public function SignUp()
    {
        if (!Auth::check()) {
            $username = BasicFunction::genrateUsername();
            return view('auth.register', ['username' => $username]);
        }
        return redirect('/');
    }
    public function RequestLogin(Request $request)
    {
        $request->validate([
            'credential' => ['required'],
            'password' => ['min:6', 'required']
        ]);
        if (!$this->CheckFirst($request->credential)) {
            return back()->with('failure', 'These Credentials is not registered With Us.');
        };
        $CheckUserExistance = User::where('email', '=', $this->CheckFirst($request->credential))->first();
        if ($CheckUserExistance) {
            $user = Auth::attempt([
                'email' => $this->CheckFirst($request->credential),
                'password' => $request->password,
            ]);
            if (!$user) {
                return back()->with('failure', 'Your Password is incorrect.');
            }
            Session()->put([
                'loginId' => $CheckUserExistance->id,
                'uname' => $CheckUserExistance->username,
                'fname' => $CheckUserExistance->name,
                'selected_course' => $CheckUserExistance->selected_course,
            ]);
            return redirect('/');
        }
        return back()->with('failure', 'These Credentials is not registered With Us.');
    }
    public function RequestNew(Request $r)
    {

        $r->validate([
            'firstname' => 'required',
            'email' => 'required|unique:users|email',
            'user_password' => 'required|min:6',
            'mobile_number' => 'required|max:12',
        ]);
        $secret = BasicFunction::secret_key();
        if (empty($r->lastname)) {
            $lastname = " ";
        }
        $socialId = "10005" . rand();
        $createNew =  User::create([
            'sign_type' => 'Email',
            'social_id' => $socialId,
            'name' => $r->firstname . " " . $lastname,
            'username' => $r->username,
            'email' => $r->email,
            'password' => Hash::make($r->user_password),
            'token' => rand(111111, 999999),
            'profile_foto' => 'user-default.png',
            'phone' => $r->mobile_number,
            'selected_course' => "SSC",
            'secret' => $secret,
        ]);
        if ($createNew) {
            $info = [
                'status' => 'Hurray',
                'error' => 'You have been Registered Successfully',
                'class' => 'success',
                'ptag' => 'info',
                'email' => $r->email_address,
            ];

            Mail::to(auth()->user()->email)->send((new WelcomeMail(
                $r->firstname,
                $r->email,
                $r->$r->username,
                $r->user_password,
                $r->$secret,
                $r->$socialId
            )));
            return redirect()->route('userVerify', ['username' => $r->username])->with($info);
        }
        $info = [
            'status' => 'Oops',
            'msg' => ', Something Might be wrong',
            'class' => 'danger',
        ];

        return back()->compact($info);
    }
    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
    public function UserVerification($username)
    {
        $token = auth()->user()->token;
        Mail::to(auth()->user()->email)->send((new VerificationMail($token)));
        return view('auth.verification', ['username' => $username, 'token' => $token,]);
    }
    public function UserVerfied(Request $request)
    {

        User::where('id', auth()->user()->id)->update(['status' => 1, 'verified' => 1]);
        return redirect()->route('home')->with('emailUpdated', 'Your Email Has been verified Successfully!');
    }
    public function CheckFirst($var)
    {
        if (is_numeric($var)) {
            $getUser = User::where('phone', '=', $var)->first();
            if (!$getUser) {
                return false;
            }

            return $getUser->email;
        } elseif (filter_var($var, FILTER_VALIDATE_EMAIL)) {
            $getUser = User::where('email', '=', $var)->first();
            if (!$getUser) {
                return false;
            }
            return $getUser->email;
        } elseif (str_starts_with($var, 'learn')) {
            $getUser = User::where('username', '=', $var)->first();
            if (!$getUser) {
                return false;
            }
            return $getUser->email;
        }
    }
    //Reset Password
    public function ResetPassword(Request $req)
    {
        $email = $this->CheckFirst($req->infotag);
        if (!$email) {
            return back()->with('failure', 'Something went wrong, try again or other Login Way.');
        }
        $secret_token = User::where('email', '=', $email)->get('secret');
        Mail::to($email)->send(new ResetPassword($secret_token));
        return redirect()->route('login')->with('ResetPassword', 'An Email has been sent to your Email, Please Check your Email');
    }
    //Login Via Phone
    public function LoginViaPhone(Request $req)
    {

        try {
            $sid = env('TWILIO_SID');
            $token = env('TWILIO_TOKEN');
            $number = env('TWILIO_FROM');
            $client = new Client($sid, $token);

            $client->messages->create(
                "+91$req->phone",
                [
                    'from' => $number,
                    'body' => 'Hey Penguin this is mulayam!',
                ]
            );
            // $verification = $client->verify->v2->services("VA10d5a7dbc11a0c29996c376b2c4b35cc")
            // ->verifications
            //     ->create("+919306373743", "sms");
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 400);
        }
    }
    //
    // public function LoginViaWhatsapp()
    // {
    //     try {
    //         //code...
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //     }
    // }
    //Google Auth
    public function GoogleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function GoogleCallback(Request $r)
    {

        $userData = Socialite::driver('google')->user();
        $user = $userData->user;

        $checkUserStatus = User::where('email', '=', $userData->email)->first();
        if ($checkUserStatus) {
            $Login = Auth::loginUsingId($checkUserStatus->id);
            Session()->put([
                'loginId' => $checkUserStatus->id,
                'uname' => $checkUserStatus->username,
                'fname' => $checkUserStatus->name,
            ]);
            return redirect()->route('home');
        }
        return view('auth.account', ['user' => $user]);
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
    }
    public function GoogleData(Request $request)
    {

        $secret = BasicFunction::secret_key();
        $createNew =  User::create([
            'sign_type' => 'Google',
            'social_id' => $request->sid,
            'name' => $request->fname . " " . $request->lname,
            'username' => $this->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token' => rand(111111, 999999),
            'profile_foto' => $request->picture,
            'phone' => "NULL",
            'selected_course' => "NULL",
            'status' => 1,
            'verified' => 1,
            'role' => "user",
            'secret' => $secret,

        ]);
        $user =  Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        Mail::to(auth()->user()->email)->send((new WelcomeMail(
            $request->fname,
            $request->email,
            $this->username,
            $request->password,
            $request->$secret,
            $request->sid
        )));
        return redirect()->route('studentDash', ['username' => $this->username]);
    }
}
