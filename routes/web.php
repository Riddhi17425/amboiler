<?php

use App\Http\Controllers\admin\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\NetworkController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\CertificateController;
use App\Http\Controllers\admin\BlogsController;
use App\Http\Controllers\admin\ProcessController;
use App\Http\Controllers\admin\MilestoneController;
use App\Http\Controllers\admin\ServiceCategoryController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\JobCategoryController;
use App\Http\Controllers\admin\JobController;

use App\Http\Controllers\admin\HeroSlideController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProjectCategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ServicesController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/clear-route-cache', function() {
    Artisan::call('route:clear');
    return 'Route cache cleared successfully';
});

// Clear all application caches via browser
Route::get('/clear-all-cache', function() {
    Artisan::call('optimize:clear');
    return 'All caches cleared successfully';
});
Route::get('/landing', [DashboardController::class,'landing'])->name('landing');

Route::get('/', [DashboardController::class,'Index'])->name('index');
Route::get('about', [DashboardController::class, 'About'])->name('about');
Route::get('testimonials', [DashboardController::class, 'Testimonials'])->name('testimonial');
Route::get('certifications', [DashboardController::class, 'Certifications'])->name('certifications');
Route::get('contact-us', [DashboardController::class, 'ContactUs'])->name('contact');
Route::post('contact-us/submit', [DashboardController::class, 'ContactSubmit'])->name('contact.submit');
Route::get('terms-conditions', [DashboardController::class, 'TermsCondition'])->name('terms-condition');
Route::get('privacy-policy', [DashboardController::class, 'PrivacyPolicy'])->name('privacy-policy');
Route::get('faq', [DashboardController::class, 'Faq'])->name('faq');

// Route::get('blogs-list', [DashboardController::class, 'Blogs'])->name('blogs');
// Route::get('blog-deatils/{url}', [DashboardController::class, 'BlogDetails'])->name('blog.details');
Route::get('blog/{url?}', [DashboardController::class, 'BlogDetails'])->name('blog');

Route::get('current-vacancies', [DashboardController::class, 'CurrentVacancies'])->name('current-vacancies');
Route::get('current-vacancies/{url}', [DashboardController::class, 'VacanciesDetails'])->name('vacancy.details');

Route::get('life-at-ame', [DashboardController::class, 'LifeAme'])->name('life-at-ame');
Route::get('quality-management', [DashboardController::class, 'QualityManagement'])->name('quality-management');
Route::get('integrat', [DashboardController::class, 'Integrated'])->name('integrat');
Route::get('industries', [DashboardController::class, 'Industries'])->name('industries');
Route::get('marine-boiler-engineer-job-detail', [DashboardController::class, 'JobDetailsForm'])->name('job-details.form');
Route::post('marine-boiler-engineer-job-detail/submit', [DashboardController::class, 'JobDetailsSubmit'])->name('job-details.submit');
Route::get('/project', [DashboardController::class, 'project'])->name('project');
Route::post('/project-submit', [DashboardController::class, 'projectstore'])->name('project.submit');
Route::get('/thank-you', [DashboardController::class, 'thankyou'])->name('thank-you');
Route::get('/thanks-for-applying', [DashboardController::class, 'thanksForApplying'])->name('thanks-for-applying');
Route::get('/service-detail/{url}', [DashboardController::class, 'ServiceDetails'])->name('service.details');
Route::get('/service/{url?}', [DashboardController::class, 'Service'])->name('service');
Route::get('/search', [DashboardController::class, 'search'])->name('search');
Route::get('login', [DashboardController::class, 'login'])->name('login');
Auth::routes();
    
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [adminController::class, 'admin'])->name('admin/dashboard');
    Route::resource('admin/network', NetworkController::class);
    Route::resource('admin/blog', BlogsController::class);
    Route::resource('admin/faq', faqController::class);
    Route::resource('admin/testimonials', TestimonialController::class);
    Route::resource('admin/certificates', CertificateController::class);
    Route::resource('admin/others', ProcessController::class);
	Route::resource('admin/milestone', MilestoneController::class);
    Route::resource('admin/category', ServiceCategoryController::class);
    Route::resource('admin/service', ServiceController::class);
    Route::resource('admin/jobcategory', JobCategoryController::class);
    Route::resource('admin/job', JobController::class);
    
    Route::resource('admin/heroslide', HeroSlideController::class);
    Route::resource('admin/project', ProjectController::class);
    Route::resource('admin/projectcategory', ProjectCategoryController::class);
    Route::resource('admin/services', ServicesController::class);
    Route::get('admin/product/get-subcategories/{id}', [ProductController::class, 'getSubcategories']);
    Route::prefix('backend')->group(function () {
    });
});
