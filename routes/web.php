<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminDefault;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\WebInfoController;
use App\Http\Controllers\CourseController as  StudentCourseController;
use App\Http\Controllers\SubscriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Default FrontEnd Routes
Route::get('/', [DefaultController::class, 'index'])->name('home');
Route::get('/Course/{random?}', [DefaultController::class, 'Course'])->name('courses');
Route::get('/Course-Intro/{contentId?}/{course_id}', [DefaultController::class, 'CourseIntro'])->name('CourseIntro');
Route::get('/class/{contentId?}/{course_id}/playlist', [DefaultController::class, 'CoursePlaylist'])->name('CoursePlaylist');
Route::get('/class/{contentId?}/{course_id}/play/{play_id}/{time?}', [DefaultController::class, 'Watch'])->name('Watch');
Route::get('/Books', [DefaultController::class, 'Books'])->name('Books');
Route::get('/Books-Overview/{Book_id}', [DefaultController::class, 'BooksOverview'])->name('BooksOverview');
Route::get('/Notes-PDFs', [DefaultController::class, 'Notes'])->name('Notes');
Route::get('/Miscellanous', [DefaultController::class, 'Miscellanous'])->name('Miscellanous');
Route::get('/Pricing', [DefaultController::class, 'Pricing'])->name('Pricing');
Route::get('/FAQs', [DefaultController::class, 'FAQs'])->name('FAQs');
Route::get('/Request-Portal', [DefaultController::class, 'RequestPortal'])->name('RequestPortal');


//Basic Routes
Route::get('/Refund-Policy', [DefaultController::class, 'RefundPolicy'])->name('RefundPolicy');
Route::get('/Privacy-Policy', [DefaultController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
Route::get('/Terms', [DefaultController::class, 'Terms'])->name('Terms');
Route::get('/DMCA', [DefaultController::class, 'DMCA'])->name('DMCA');
Route::get('/About', [DefaultController::class, 'About'])->name('About');
Route::get('/ContactUs', [DefaultController::class, 'ContactUs'])->name('ContactUs');



Route::get('/Auth/Login', [AuthController::class, 'SignIn'])->name('login');
Route::get( '/Auth/New', [AuthController::class, 'SignUp'])->name('register');
Route::post( '/Auth/Request/OTP', [AuthController::class, 'LoginViaPhone'])->name('loginViaPhone');
Route::get('/Auth/Request/WhatsApp', [AuthController::class, 'LoginViaWhatsapp'])->name('login.whatsapp');
Route::post('/Request/Login', [AuthController::class, 'RequestLogin'])->name('doLogin');
Route::post('/Add/NewUser', [ AuthController::class, 'RequestNew'])->name('addUser');
Route::post( '/Auth/RecoverPassword', [AuthController::class, 'ResetPassword'])->name('RecoverPassword');
Route::get('/Auth/ForgetPassword/{token?}', [AuthController::class, 'GetPassword'])->name('getResetPassword');
Route::get('/Auth/ForgetPassword/', [AuthController::class, 'UpdatePassword'])->name('updateResetPassword');


//User
Route::middleware('auth', 'verified')->group(function () {
    Route::prefix('/student/{username}')->group(function () {
        Route::get('dashboard', [UserController::class, 'index'])->name('studentDash');
        Route::get('inbox', [UserController::class, 'messages'])->name('studentInbox');
        Route::get('notification', [UserController::class, 'index'])->name('studentNotify');
        Route::get('enrolled/courses', [UserController::class, 'EnrolledCourses'])->name('studentCourses');
        Route::get('saved/videos', [UserController::class, 'SavedVideos'])->name('studentSavedVideo');
        Route::get('transactions', [UserController::class, 'Transactions'])->name('studentTxn');
        Route::get('profile', [UserController::class, 'WatchProfile'])->name('WatchProfile');
        Route::get('profile/settings', [UserController::class, 'ProfileSetting'])->name('studentProfile');
    });
    Route::get('/User/UnderVerifcation/{username}/', [AuthController::class, 'UserVerification'])->name('userVerify');
    Route::post('/User/ProcessVerifcation/', [AuthController::class, 'UserVerfied'])->name('UserVerfied');
    Route::post('/course/enroll', [StudentCourseController::class, 'EnrollUser'])->name('EnrollUserCourse');
    Route::get('/Auth/Logout', [AuthController::class, 'Logout'])->name('userLogout');
    // Susbcription
    Route::get('/Subscription/{get_plan}/{course_id?}', [SubscriptionController::class, 'index'])->name('Subscription');
    Route::post('/Subscription/Payments/Proccess', [SubscriptionController::class, 'paytmPayment'])->name('paytm.payment');
    Route::post('/Subscription/Payments/Redirect', [SubscriptionController::class, 'paytmCallback'])->name('paytm.callback');
    Route::get('/Subscription/Payments/Response', [SubscriptionController::class, 'paytmPurchase'])->name('paytm.purchase');
});

Route::get('/authenctication/google/redirect', [AuthController::class, 'GoogleRedirect'])->name('GoogleRedirect');
Route::get('/authenctication/google/oauth2/callback', [AuthController::class, 'GoogleCallback'])->name('GoogleCallback');
Route::post('/authenctication/google/add/user', [AuthController::class, 'GoogleData'])->name('PostGoogleCallback');




//Admin ->middleware('auth','verified')->
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminDefault::class, 'index']);
    Route::get('courses', [AdminDefault::class, 'AllCourse']);
    Route::get('courses/edit/{course_id}', [AdminCourseController::class, 'EditCourse'])->name('editCourse');
    Route::get('courses/show/section/{course_id}', [AdminCourseController::class, 'AddSection'])->name('AddSection');
    Route::get('categories/all', [AdminDefault::class, 'Category']);
    Route::get('books/all', [AdminDefault::class, 'Books']);
    Route::get('create-new-course', [AdminDefault::class, 'CreateNewCourse']);
    Route::get('list/students', [StudentController::class, 'StudentsList']);

    Route::get('add/student', [StudentController::class, 'AddStudent']);

    //posts method only
    //courses
    Route::post('courses/add/{course_id}', [AdminCourseController::class, 'AddNew'])->name('addNewCourse');
    Route::post('create-new-course', [AdminCourseController::class, 'CreateNew'])->name('createCourse');

    //section
    Route::post('courses/add/section/{course_id}', [AdminCourseController::class, 'AddSectionPost'])->name('AddSectionPost');
    Route::post('courses/add/section/new/video', [AdminCourseController::class, 'AddVideosInSection'])->name('AddVideos');

    //users
    Route::post('add/new/student', [AdminCourseController::class, 'AddNewStudent'])->name('addNewStudent');

    Route::prefix('/web')->group(function () {
        Route::get('information', [WebInfoController::class, 'WebInformation'])->name('WebInfo');
        Route::get('general', [WebInfoController::class, 'General'])->name('General');
        Route::get('payment-setting', [WebInfoController::class, 'PaymentSetting']);
        //settings
        Route::post('information/update', [WebInfoController::class, 'WebInformationUpdate'])->name('WebInfoUpdate');
        Route::post('general/update/{feildName}', [WebInfoController::class, 'GeneralUpdate'])->name('GeneralUpdate');
        Route::post('payment-setting/update', [WebInfoController::class, 'PaymentSettingUpdate'])->name('PaymentSettingUpdate');
        Route::post('authentication-setting', [WebInfoController::class, 'AuthUpdate'])->name('AuthUpdate');
        Route::post('social-login-setting', [WebInfoController::class, 'SocialLoginUpdate'])->name('SocialLoginUpdate');
    });

});
//AJAX ROUTES
Route::get('/all/notifications/{userId}', [UserController::class, 'GetNotifications'])->name('get.notifications');;

