<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\HomeNewsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\TeamInfoController;
   


require __DIR__.'/auth.php';
Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//------------------ For frontEnd ------------------------- //
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/about',  [WelcomeController::class, 'about']);
Route::get('/services',  [WelcomeController::class, 'services']);
Route::get('/portfolio',  [WelcomeController::class, 'portfolio']);
Route::get('/blog',  [WelcomeController::class, 'blog']);
Route::get('/contact',  [WelcomeController::class, 'contact']);

Route::post('/save/contactInfo', [ContactController::class, 'saveContactInfo']);
Route::get('/manage/contactInfo', [ContactController::class, 'manageContactInfo']);
Route::get('/delete/contactInfo/{id}', [ContactController::class, 'deleteContactInfo']);

Route::get('/add/homeSliderInfo', [HomeSliderController::class, 'addHomeSliderInfo']);
Route::post('/save/homeSliderInfo', [HomeSliderController::class, 'saveHomeSliderInfo']);
Route::get('/manage/homeSliderInfo', [HomeSliderController::class, 'manageHomeSliderInfo']);
Route::get('/edit/homeSliderInfo/{id}', [HomeSliderController::class, 'editHomeSliderInfo']);
Route::post('/update/homeSliderInfo', [HomeSliderController::class, 'updateHomeSliderInfo']);
Route::get('/delete/homeSliderInfo/{id}', [HomeSliderController::class, 'deleteHomeSliderInfo']);

Route::get('/add/homeNewsInfo', [HomeNewsController::class, 'addHomeNewsInfo']);
Route::post('/save/homeNewsInfo', [HomeNewsController::class, 'saveHomeNewsInfo']);
Route::get('/manage/homeNewsInfo', [HomeNewsController::class, 'manageHomeNewsInfo']);
Route::get('/edit/homeNewsInfo/{id}', [HomeNewsController::class, 'editHomeNewsInfo']);
Route::post('/update/homeNewsInfo', [HomeNewsController::class, 'updateHomeNewsInfo']);
Route::get('/delete/homeNewsInfo/{id}', [HomeNewsController::class, 'deleteHomeNewsInfo']);

Route::get('/add/blogInfo', [BlogController::class, 'addBlogInfo']);
Route::post('/save/blogInfo', [BlogController::class, 'saveBlogInfo']);
Route::get('/manage/blogInfo', [BlogController::class, 'manageBlogInfo']);
Route::get('/edit/blogInfo/{id}', [BlogController::class, 'editBlogInfo']);
Route::post('/update/blogInfo', [BlogController::class, 'updateBlogInfo']);
Route::get('/delete/blogInfo/{id}', [BlogController::class, 'deleteBlogInfo']);
//------------------ For frontEnd ------------------------- //


//----------------------- For admin -----------------------//
Route::get('/add/aboutInfo', [AboutController::class, 'addAboutInfo']);
Route::post('/save/aboutInfo', [AboutController::class, 'saveAboutInfo']);
Route::get('/manage/aboutInfo', [AboutController::class, 'manageAboutInfo']);
Route::get('/edit/aboutInfo/{id}', [AboutController::class, 'editAboutInfo']);
Route::post('/update/aboutInfo', [AboutController::class, 'updateAboutInfo']);
Route::get('/delete/aboutInfo/{id}', [AboutController::class, 'deleteAboutInfo']);
//----------------------- For admin -----------------------//


//----------------------- For others -----------------------//
Route::get('/tables', [OtherController::class, 'tables']);
Route::get('/forms', [OtherController::class, 'forms']);
Route::get('/panels-wells', [OtherController::class, 'panels']);
Route::get('/buttons', [OtherController::class, 'buttons']);
Route::get('/notifications', [OtherController::class, 'notifications']);
Route::get('/typography', [OtherController::class, 'typography']);
Route::get('/icons', [OtherController::class, 'icons']);
Route::get('/grid', [OtherController::class, 'grid']);

Route::get('/add/company', [CompanyInfoController::class, 'addCompany']);
Route::post('/save/company', [CompanyInfoController::class, 'saveCompany']);
Route::get('/manage/company', [CompanyInfoController::class, 'manageCompany']);
Route::get('/edit/companyInfo/{id}', [CompanyInfoController::class, 'editCompanyInfo']);
Route::post('/update/companyInfo', [CompanyInfoController::class, 'updateCompanyInfo']);
Route::get('/delete/companyInfo/{id}', [CompanyInfoController::class, 'deleteCompanyInfo']);

Route::get('/add/teamInfo', [TeamInfoController::class, 'addTeamInfo']);
Route::post('/save/teamInfo', [TeamInfoController::class, 'saveTeamInfo']);
Route::get('/manage/teamInfo', [TeamInfoController::class, 'manageTeamInfo']);
Route::get('/edit/teamInfo/{id}', [TeamInfoController::class, 'editTeamInfo']);
Route::post('/update/teamInfo', [TeamInfoController::class, 'updateTeamInfo']);
Route::get('/delete/teamInfo/{id}', [TeamInfoController::class, 'deleteTeamInfo']);
//----------------------- For others -----------------------//
