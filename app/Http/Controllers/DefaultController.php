<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Course;
use App\Models\EnrollUser;
use App\Models\Page;
use App\Models\Section;
use App\Models\Video;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {

        return view('explore');
    }
    public function Course()
    {
        $courses  = Course::getDetails();
        return view('frontend.courses-list', ['courses' => $courses]);
    }
    public function CourseIntro($course_id)
    {

        $course = Course::find($course_id)->load(['details', 'category', 'checkEnroll']);

        return view('frontend.course-intro', ['courseDeta' => $course]);
    }
    public function CoursePlaylist($course_id)
    {
        $course = Course::find($course_id)->load(['details:id,short_desc', 'getVideos'])->first();

        return view('frontend.course-playlist', ['coursePlaylist' => $course]);
    }
    public function Watch($course_id, $play_id, $time = "0")
    {
        $Getvideos = Video::where("course_id", $course_id)
            ->where("video_id", $play_id)
            ->with(['getcourse:id,course_name'])
            ->first();

        return view('frontend.course-watch', ['video' => $Getvideos, 'play_id' => $play_id]);
    }
    public function Telegram()
    {
        return view('frontend.pages.telegram');
    }
    public function Pricing()
    {
        return view('frontend.page-pricing');
    }
    public function Category()
    {
        return view('frontend.categories');
    }
    public function Books()
    {
        $books = Book::paginate(15);
        return view('frontend.books', ['books' => $books]);
    }
    public function BooksOverview($id)
    {
        $bookDetails = Book::where("book_id", "=", $id)->first();

        $newtime = strtotime($bookDetails->created_at);
        $newtime = date('m/d/Y', $newtime);
        $publish = Carbon::createFromFormat('m/d/Y', $newtime)->diffForHumans();

        return view('frontend.book-description', ['bookDetails' => $bookDetails, 'publish' => $publish]);
    }

    public function Miscellanous()
    {
        return view('frontend.page-others');
    }
    public function Notes()
    {
        return view('frontend.page-notes');
    }
    public function FAQs()
    {
        return view('frontend.page-faq');
    }
    public function RequestPortal()
    {
        return view('frontend.page-request');
    }

    public function RefundPolicy()
    {
        $content = Page::where('id', 3)->get('content');
        return view('frontend.page-refund', ['content' => $content[0]->content]);
    }
    public function PrivacyPolicy()
    {
        $content = Page::where('id', 1)->get('content');
        return view('frontend.page-privacy', ['content' => $content[0]->content]);
    }
    public function Terms()
    {
        $content = Page::where('id', 2)->get('content');
        return view('frontend.page-term', ['content' => $content[0]->content]);
    }
    public function DMCA()
    {
        return view('frontend.page-dmca');
    }
    public function About()
    {
        $content = Page::where('id', 4)->get('content');
        return view('frontend.page-about',['content' => $content[0]->content]);
    }
    public function ContactUs()
    {
        return view('frontend.page-contact');
    }
}
