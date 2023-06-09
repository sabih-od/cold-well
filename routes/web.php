<?php

use App\Http\Controllers\Admin\AdditionalItemController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CmsContoller;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PropertyController;


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

//NEW ROUTES START

Route::get('/filter', [FrontController::class, 'filter'])->name('filter');
Route::get('/clear-filter', [FrontController::class, 'clearFilter'])->name('clearFilter');



Route::get('/sign-in', [FrontController::class, 'signIn'])->name('signIn');
Route::get('/create-account', [FrontController::class, 'createAccount'])->name('createAccount');
Route::get('/forget-password', [FrontController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/sell-your-home', [FrontController::class, 'sellYourHome'])->name('sellYourHome');
Route::get('/search-property', [FrontController::class, 'searchProperty'])->name('searchProperty');
Route::get('/properties', [FrontController::class, 'properties'])->name('properties');
Route::get('/market-report', [FrontController::class, 'marketReport'])->name('marketReport');
Route::get('/communities', [FrontController::class, 'communities'])->name('communities');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contactUs');
Route::get('/privacy', [FrontController::class, 'privacy'])->name('privacy');
Route::get('/terms', [FrontController::class, 'terms'])->name('terms');
Route::post('/sell-property', [PropertyController::class, 'store'])->name('sellProperty');
Route::get('/property-detail/{id}', [PropertyController::class, 'propertyDetail'])->name('propertyDetail');


Route::get('/', [FrontController::class, 'home'])->name('home');
Route::post('custom-user-login', [\App\Http\Controllers\Auth\LoginController::class, 'customLogin'])->name('userLogin');
Route::post('user-register', [\App\Http\Controllers\Auth\RegisterController::class, 'userRegister'])->name('userRegister');
Route::get('reset-password-email', [\App\Http\Controllers\Auth\LoginController::class, 'resetPasswordEmail'])->name('resetPasswordEmail');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class ,'logout'])->name('user-logout');
Route::post('/verfication-email', [\App\Http\Controllers\Auth\LoginController::class ,'verficationEmail'])->name('verficationEmail');

Route::post('/forgot-password', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email.send');

Route::get('/reset-password/{email}/{token}', [\App\Http\Controllers\Auth\PasswordResetLinkController::class, 'showResetForm'])
    ->middleware('guest')
    ->name('password.reset.view');

Route::post('/reset-password', [\App\Http\Controllers\Auth\NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.change');
//    ->name('password.update');

Auth::routes();

// NEW ROUTES END


//Route::post('/home-email', [FrontController::class, 'homeEmail'])->name('home.email');
//Route::get('/about', [FrontController::class, 'about'])->name('about');
//Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
//Route::post('/rating',[FrontController::class,'rating'])->name('blog.rating');
//Route::match(['get', 'post'], '/contact', [FrontController::class, 'contact'])->name('contact');
//Route::get('/services', [FrontController::class, 'services'])->name('our.services');
//Route::get('/resources',[FrontController::class,'resources'])->name('resources');
//Route::get('/where-is-my-refund',[FrontController::class,'refunds'])->name('where-is-my-refund');
//Route::get('/terms-condtion',[FrontController::class,'termsCondtion'])->name('terms.condition');
//Route::get('/privacy-policy',[FrontController::class,'privacyPolicy'])->name('privacy.policy');
//Route::get('/review',[FrontController::class,'review'])->name('review');
//Route::post('/review-form',[FrontController::class,'reviewForm'])->name('review.form');
//
//Route::name('front.')->group(function () {
//    Route::get('/daily-bible-study-questions', [FrontController::class, 'dailyBibleStudyQuestions'])->name('dailyBibleStudyQuestions');
//    Route::get('/lessons-learnned-on-daddys-lap', [FrontController::class, 'lessonsLearnnedOnDaddysLap'])->name('lessonsLearnnedOnDaddysLap');
//    Route::get('/outside-resources', [FrontController::class, 'outsideResources'])->name('outsideResources');
//});


//Route::get('/get-started', function () {
//    return view('get-started');
//})->name('get-started');
//
//Route::get('/get-started-detail', function () {
//    return view('get-started-detail');
//})->name('get-started-detail');
//
//Route::get('/homeowners', function () {
//    return view('homeowners');
//})->name('homeowners');
//
//Route::get('/monthly-payments', function () {
//    return view('monthly-payments');
//})->name('monthly-payments');
//
//Route::get('/property-taxes', function () {
//    return view('property-taxes');
//})->name('property-taxes');
//
//Route::get('/signup', function () {
//    return view('signup');
//})->name('signup');
//
//Route::get('/forget-password', function () {
//    return view('forget-password');
//})->name('forget.password');
//
//Route::get('/disclaimers', function () {
//    return view('disclaimers');
//})->name('disclaimers');
//
//Route::get('/terms-of-services', function () {
//    return view('terms-of-service');
//})->name('terms.of.services');
//
//Route::get('/privacy-policy', function () {
//    return view('privacy-policy');
//})->name('privacy.policy');
//
////login
//Route::get('user/login', function () {
//    return view('login');
//})->name('admin.login');


// Admin Routes
//Route::namespace('Admin')->middleware('admin')->group(function () {
//
//    Route::group(['prefix' => 'admin/dashboard'], function () {
//        //dashboard controller
//        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.home');
//
//        // CMS Routes
//        Route::match(['get', 'post'], 'home-cms', [CmsContoller::class, 'home'])->name('cms.home');
//        Route::match(['get', 'post'], 'about-cms', [CmsContoller::class, 'aboutUs'])->name('cms.about');
//        Route::match(['get', 'post'], 'services-cms', [CmsContoller::class, 'ourServices'])->name('cms.services');
//        Route::match(['get', 'post'], 'blogs-cms', [CmsContoller::class, 'blogs'])->name('cms.blogs');
//        Route::match(['get', 'post'], 'resource-cms', [CmsContoller::class, 'resource'])->name('cms.resource');
//        Route::match(['get', 'post'], 'lessons-cms', [CmsContoller::class, 'lessons'])->name('cms.lessons');
//        Route::match(['get', 'post'], 'faqs-cms', [CmsContoller::class, 'faqs'])->name('cms.faqs');
//        Route::match(['get', 'post'], 'fee-schedule-cms', [CmsContoller::class, 'feeSchedule'])->name('cms.fee.schedule');
//        Route::match(['get', 'post'], 'settings-cms', [CmsContoller::class, 'settings'])->name('cms.settings');
////        Route::match(['get', 'post'], 'subscriber-cms', [SubscriberController::class, 'subscriber'])->name('cms.subscriber');
//        Route::get('/subscriber', [SubscriberController::class, 'subscriber'])->name('subscriber.List');
//
//
//        // CMS Add blog
//        Route::post('/create/blog', [BlogController::class, 'blogCreate'])->name('create.blog');
//        Route::get('/edit-blog/{blog}', [BlogController::class, 'blogEdit'])->name('edit.blog');
//        Route::post('/update/blog/{id}', [BlogController::class, 'blogUpdate'])->name('update.blog');
//        Route::post('/destroy/blog/{id}', [BlogController::class, 'blogDestroy'])->name('destroy.blog');
//
//        Route::get('/add-blog', [BlogController::class, 'addBlog'])->name('add.blog');
//        Route::get('/index-blog', [BlogController::class, 'indexBlog'])->name('index.blog');
//
//        // CMS Add lesson
//        Route::post('/create/lesson', [LessonController::class, 'lessonCreate'])->name('create.lesson');
//        Route::get('/edit-lesson/{lesson}', [LessonController::class, 'lessonEdit'])->name('edit.lesson');
//        Route::post('/update/lesson/{id}', [LessonController::class, 'lessonUpdate'])->name('update.lesson');
//        Route::post('/destroy/lesson/{id}', [LessonController::class, 'lessonDestroy'])->name('destroy.lesson');
//
//        Route::get('/add-lesson', [LessonController::class, 'addLesson'])->name('add.lesson');
//        Route::get('/index-lesson', [LessonController::class, 'indexLesson'])->name('index.lesson');
//
//        // CMS Add Addtional items
//        Route::post('/create/additional', [AdditionalItemController::class, 'additionalCreate'])->name('create.additional');
//        Route::get('/edit-additional/{additional}', [AdditionalItemController::class, 'additionalEdit'])->name('edit.additional');
//        Route::post('/update/additional/{id}', [AdditionalItemController::class, 'additionalUpdate'])->name('update.additional');
//        Route::post('/destroy/additional/{id}', [AdditionalItemController::class, 'additionalDestroy'])->name('destroy.additional');
//
//        Route::get('/add-additional', [AdditionalItemController::class, 'addAdditional'])->name('add.additional');
//        Route::get('/index-additional', [AdditionalItemController::class, 'indexAdditional'])->name('index.additional');
//
//        // CMS Add Service
//        Route::post('/service/create', [ServiceController::class, 'serviceCreate'])->name('admin.service.store');
//        Route::get('/service/edit/{service}', [ServiceController::class, 'serviceEdit'])->name('admin.service.edit');
//        Route::post('/service/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('admin.service.update');
//        Route::post('/service/destroy/{id}', [ServiceController::class, 'serviceDestroy'])->name('admin.service.destroy');
//
//        Route::get('/service/add', [ServiceController::class, 'addService'])->name('add.service');
//        Route::get('/service', [ServiceController::class, 'index'])->name('index.service');
//
//        //REVIEW
//        Route::get('/review', [ReviewsController::class,'index'])->name('review.index');
//        Route::get('/review/{id}', [ReviewsController::class,'show'])->name('review.show');
//        Route::match(['get', 'post'], '/review/edit/{id}', [ReviewsController::class,'edit'])->name('review.edit');
//        Route::delete('review/destroy/{id}', [ReviewsController::class,'destroy']);
//
//    });
//});
