<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserControler;

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



Route::get('/', [SendEmailController::class, 'index'])->name('index');

Route::post('submit/',[SendEmailController::class, 'send'] ); 
    
Route::get('projects/', function (){ return view('project'); })->name('projects');

    ///////===========================admin route==============================/////

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashbrd'])->name('dashboard');
    Route::get('/about-page', [AdminController::class, 'abotpag'])->name('about');
    Route::get('/services-page', [AdminController::class, 'servspag'])->name('service');
    Route::post('/services-page',[AdminController::class, 'postservs'])->name('postservice');
    Route::get('/resume-page', [AdminController::class, 'resmepag'])->name('resume');
    Route::post('/resume-page/education', [AdminController::class, 'educat'])->name('educate');
    Route::get('/resume-page/education/update/{id}', [AdminController::class, 'updateducat'])->name('updatEducate');
    Route::get('/resume-page/education/delete/{id}', [AdminController::class, 'deleteducat']);
    Route::post('/resume-page/education/update/', [AdminController::class, 'updatedu'])->name('updatEdu');

    Route::post('/resume-page/qualification', [AdminController::class, 'qualify'])->name('qualify');
    Route::get('/resume-page/qualification/update/{id}', [AdminController::class, 'updatequalify'])->name('updateQualify');
    Route::get('/resume-page/qualification/delete/{id}', [AdminController::class, 'deletequalify']);
    Route::post('/resume-page/qualification/update/', [AdminController::class, 'updatequa'])->name('updateQua');
    Route::get('/contact-page', [AdminController::class, 'contpag'])->name('contact');
    Route::get('/project-page', [AdminController::class, 'projtpag'])->name('project');

    Route::get('/services_page/delete/{id}', [AdminController::class, 'deleteservs']);
    Route::get('/services_page/update/{id}', [AdminController::class, 'updateviweservs'])->name('serviceUpdate');
    Route::post('/services_page/update/', [AdminController::class, 'updateservs'])->name('updateService');

});



//////////////////////============authentication route===========================/////
require __DIR__.'/auth.php';
