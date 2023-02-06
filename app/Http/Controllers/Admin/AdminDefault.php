<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;

class AdminDefault extends Controller
{
    public function index()
    {
        $courses = Course::all()->count();
        $users = User::all()->count();
        return view('admin.dashboard', [
            'totalUsers' => $users,
            'totalCourses' => $courses,
        ]);
    }
    public function AllCourse()
    {
        $course = Course::with('category','checkEnroll')->paginate(12);
        $disabled = Course::where("is_active", "=", 0)->count();
        return view('admin.courses', [
            'courses'=> $course,
            'disabled' => $disabled,

        ]);
    }
    public function Category()
    {
        $categories = Category::all();
        return view('admin.categories', ['categories' => $categories]);
    }
    public function Books()
    {
        $books = Book::all();
        return view('admin.books', ['books' => $books]);
    }


}
