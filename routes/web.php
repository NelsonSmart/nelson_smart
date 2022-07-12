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
    Route::get('/resume-page', [AdminController::class, 'resmepag'])->name('resume');
    Route::get('/contact-page', [AdminController::class, 'contpag'])->name('contact');
    Route::get('/project-page', [AdminController::class, 'projtpag'])->name('project');

});



//////////////////////============authentication route===========================/////
require __DIR__.'/auth.php';
