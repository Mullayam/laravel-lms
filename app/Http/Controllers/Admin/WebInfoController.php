<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site_Settings;
use App\Http\Controllers\BasicFunction;
use Illuminate\Http\Request;

class WebInfoController extends Controller
{
    public function WebInformation()
    {
        $webInformation = BasicFunction::settings(1);
        return  view('admin.setting', ['get' => $webInformation]);
    }

    public function General()
    {
        $SocialLogin = BasicFunction::settings(3);
        $Auth = BasicFunction::settings(4);
        $General = BasicFunction::settings(5);
        return  view('admin.general',
            [
                'General' => $General,
                'SocialLogin' => $SocialLogin,
                'Auth' => $Auth,
            ]
        );
    }

    public function PaymentSetting()
    {
        $Payments = BasicFunction::settings(2);

        return  view('admin.payment-setting', ['payment' => $Payments]);
    }


    //all settings post request below
    public function WebInformationUpdate(Request $req)
    {
        $var  = $req->all();
        $RemoveToken =  array_slice($var, 1);
        $new = Site_Settings::find(1)->update([
            'content' => $RemoveToken,
        ]);
        return  redirect()->route('WebInfo')->with('success');
    }

    public function PaymentSettingUpdate(Request $req)
    {
        $ValidateValues = $req->validate($req->all());
        if ($ValidateValues) {
            $RemoveToken = BasicFunction::RemoveToken($req->all());
            $updateSettings = Site_Settings::find(2)->update([
                'content' => $RemoveToken,
            ]);
            if (!$updateSettings) {
                return redirect()->route('PaymentSetting')->with('failure', 'Some Error Has been Occured');
            }
            return redirect()->route('PaymentSetting')->with('success', 'Settings Updated Successfully');
        }
        return redirect()->route('PaymentSetting')->with('failure', 'All Fields Are Required');
    }


    public function SocialLoginUpdate(Request $req)
    {

        $ValidateValues = false;
        if ($req->FACEBOOK_LOGIN == "on") {
            $ValidateValues = $req->validate([
                'Facebook_Application_ID' => 'required',
                'Facebook_Application_Secret' => 'required',
                'Facebook_CALLBACK_URL' => 'required',
            ]);
        }
        if ($req->GOOGLE_LOGIN == "on") {
            $ValidateValues = $req->validate([
                'GOOGLE_CLIENT_ID' => 'required',
                'GOOGLE_CLIENT_SECRET' => 'required',
                'GOOGLE_CALLBACK_URL' => 'required',
            ]);
        }
        $RemoveToken = BasicFunction::RemoveToken($req->all());
        // dd($RemoveToken);
        if ($ValidateValues) {
            $updateSettings = Site_Settings::find(3)->update([
                'content' => $RemoveToken,
            ]);
            if (!$updateSettings) {
                return redirect()->route('General')->with('failure', 'Some Error Has been Occured');
            }
            return redirect()->route('General')->with('success', 'Settings Updated Successfully');
        }
        return redirect()->route('General')->with('failure', 'Found Some Errors');
    }

    public function AuthUpdate(Request $req)
    {

        $RemoveToken = BasicFunction::RemoveToken($req->all());
        $updateSettings = Site_Settings::find(4)->update([
            'content' => $RemoveToken,
        ]);
        if (!$updateSettings) {
            return redirect()->route('General')->with('failure', 'Some Error Has been Occured');
        }
        return redirect()->route('General')->with('success', 'Settings Updated Successfully');
    }
}
