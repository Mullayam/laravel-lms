<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnrollUser;
use App\Mail\CourseEnrollmentMail;
use Illuminate\Support\Facades\Mail;
class CourseController extends Controller
{
    public function EnrollUser(Request $req)
    {
        $ajaxData = $req->validate([
            'course_id' => 'required',
            'user_id' => 'required',
        ]);

        if(!$ajaxData){
            return response()->json(['message' => 'All Feilds are Required', 'status' => false, 'type' => "red"]);
        }
        $isEnrolled = EnrollUser::where('course_id', $req->course_id)->where('user_id',$req->user_id)->first();
        if ($isEnrolled) {
            return response()->json(['message' => 'You\'ve already Enrolled in this Course', 'status' => false, 'type' => "red"]);
        }
        $Enrolled = EnrollUser::create($ajaxData);
        if (!$Enrolled) {
            return response()->json(['message' => 'Error Occured', 'status' => false, 'type' => "red"]);
        }
        Mail::to(auth()->user()->email)->send(new CourseEnrollmentMail(auth()->user()->name));
        return response()->json(['message' => 'Course Enrolled Successfully.', 'status' => true, 'type' => "green"]);
    }

}
