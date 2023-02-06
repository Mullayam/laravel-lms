<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BasicFunction;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Course_Detail;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Video;

class CourseController extends Controller
{

    public function EditCourse($course_id)
    {
        $coursedetails = Course::find($course_id)->first();
        return view('admin.create-new-course', ['coursedetails' => $coursedetails]);
    }
    public function CreateNewCourse()
    {
        $categories = Category::all();
        return view('admin.create-new-course', ['categories' => $categories]);
    }
    public function CreateNew(Request $request)
    {
        // $request->except('')
        $is_featured = 0;
        $check_discount = 0;
        if ($request->is_featured) {
            $is_featured = true;
        }
        if ($request->check_discount) {
            $check_discount = $request->course_discount;
        }

        $course =  Course::create([
            'course_name' => $request->course_name,
            'thumbnail' => $request->course_thumbnail,
            'category_id' => $request->course_category,
            'subcat_id' => $request->course_type,
            'course_length' => $request->course_length,
            'total_lecture' => $request->course_lessions,
            'has_discount' => $check_discount,
            'sale_type' => $request->sale_type,
            'is_featured' => $is_featured,
        ]);
        $courseDetails = Course_Detail::create([
            'course_id' => $course->id,
            'short_desc' => $request->short_description,
            'description' => $request->description,
            'tags' => $request->tags,
            'level' => $request->course_level,
            'language' => $request->course_language,
            'requirements' => $request->course_name,
            'link' => $request->links,
            'index_list' => $request->indexlist,
            'seo' => $request->course_meta,
        ]);

        return redirect()->route('createCourse');
    }
    public function AddSection(Section $sections, $course_id)    {

        $Allsections = $sections->where("course_id", $course_id)->get();
        return view('admin.video_sections', ['CourseSections' => $Allsections, 'course_id'=>$course_id]);
    }
    public function AddSectionPost(Request $req, Section $section)
    {

        $validate =  $req->validate(['section_title' => 'required', 'course_id' => 'required']);
        if (!$validate) {
            return redirect()->route('AddSection', ['course_id' => $req->course_id])->with('msg', 'Please Enter Required Values');
        }
        if (Section::where("section_title", $req->section_title)) {
            return redirect()->route('AddSection', ['course_id' => $req->course_id])->with('msg', 'This Section Name is already Exists');
        }
        $createSection =  Section::create($req->all());
        if (!$createSection) {
            return redirect()->route('AddSection', ['course_id' => $req->course_id])->with('msg', 'Enable to Create New Section');
        }
        return redirect()->route('AddSection', ['course_id' => $req->course_id])->with('msg', "$req->section_title has been Created Successffuly");
    }
    public function AddVideosInSection(Request $req)
    {

        $validate = $req->validate(['name' => 'required', 'link' => 'required']);
        if (!$validate) {
            return response()->json(['message' => "All Fields Required", 'status' => false]);
        }
        $newVideo  = Video::insert([
            "video_id" => BasicFunction::videoId(),
            "course_id" => $req->course_id,
            "section_id" => $req->section_id,
            "name" => $req->name,
            "details" => $req->details,
            "type" => $req->type,
            "link" => $req->link,
            "poster" =>$req->poster,
            "category_id" => $req->category_id,
            "is_paid" => $req->is_paid,
            "is_down" => $req->is_down,
        ]);
        if (!$newVideo) {
            return response()->json(['message' => "Video not Added", 'status' => false]);
        }
        return response()->json(['message' => "Video Added Successfully", 'status' => true]);
    }
}
