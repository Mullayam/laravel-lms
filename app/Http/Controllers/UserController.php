<?php

namespace App\Http\Controllers;

use App\Models\EnrollUser;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        $enrolled = EnrollUser::with('enrolledCourse:id,course_name,thumbnail')->get();


        return view('student.dashboard',['courses'=> $enrolled]);
    }
    public function ProfileSetting()
    {

        return view('student.setting');
    }
    public function EnrolledCourses()
    {
        $enrolledCourses = EnrollUser::with('enrolledCourse:id,course_name,thumbnail,course_length,total_lecture')->paginate(6);

        return view('student.my_courses',['courses' => $enrolledCourses]);
    }
    public function SavedVideos()
    {

        return view('student.saved_videos');
    }
    public function Transactions()
    {

        return view('student.billing_history');
    }
    public function WatchProfile()
    {

        $count = EnrollUser::with('enrolledCourse:id')->count();

                return view('student.profile',['count'=> $count]);
    }
    public function messages()
    {
        return view('student.messages');
    }
    public function GetNotifications($userId)
    {
        // $notfication = Notification::where('id','=', $userId)->where('is_read',"=",0)->groupBy('user_id')->get();

        // $total=$notfication->count();
        // $notfication= json_encode($notfication);
        $notfication = DB::select('select * from notifications where id = :id', ['id' => $userId]);
        dd($notfication);
        return response()->json(['data' => "$notfication", 'status' => true, 'total' => "$total"]);

    }
}
