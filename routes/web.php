<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [pagecontroller::class, 'home'])->name('home');
Route::get('/about-us', [pagecontroller::class, 'about'])->name('about');
Route::get('/puf-sandwich-roofings-in-chennai', [pagecontroller::class, 'pufSandwich'])->name('pufSandwich');
Route::get('/metal-roofings-in-chennai', [pagecontroller::class, 'metalRoofings'])->name('metalRoofings');
Route::get('/aluminium-awnings-in-chennai', [pagecontroller::class, 'aluminiumAwnings'])->name('aluminiumAwnings');
Route::get('/tensile-roofings-in-chennai', [pagecontroller::class, 'tensileRoofings'])->name('tensileRoofings');
Route::get('/polycarbonate-roofings-in-chennai', [pagecontroller::class, 'polycarbonateRoofings'])->name('polycarbonateRoofings');
Route::get('/terrace-roofings-in-chennai', [pagecontroller::class, 'terraceRoofings'])->name('terraceRoofings');
Route::get('/projects', [pagecontroller::class, 'projects'])->name('projects');
Route::get('/contact-us', [pagecontroller::class, 'contact'])->name('contact');
Route::post('/feedback', [DashboardController::class, 'feedback'])->name('feedback');
Route::get('/feedback-list', [DashboardController::class, 'feedbacklist'])->name('feedbacklist');

Route::get('/login', [DashboardController::class, 'login'])->name('login');
Route::post('/logincheck', [DashboardController::class, 'logincheck'])->name('logincheck');

Route::get('/reg', [DashboardController::class, 'reg'])->name('reg');
Route::post('/newuser', [DashboardController::class, 'newuser'])->name('newuser');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

Route::get('categories', [DashboardController::class, 'categoriespage'])->name('categories');
Route::post('createcategory', [DashboardController::class, 'createcategory'])->name('createcategory');
Route::get('categorylist', [DashboardController::class, 'categorylist'])->name('categorylist');
Route::get('editcategory/{id}', [DashboardController::class, 'editcategory'])->name('editcategory');
Route::put('updatecategory/{id}', [DashboardController::class, 'updatecategory'])->name('updatecategory');
Route::delete('deletecategory/{id}', [DashboardController::class, 'deletecategory'])->name('deletecategory');

Route::get('/medialist', [DashboardController::class, 'medialist'])->name('medialist');
Route::get('/mediapage', [DashboardController::class, 'mediapage'])->name('mediapage');
Route::post('createimage', [DashboardController::class, 'createimage'])->name('createimage');
Route::get('editmedia/{id}', [DashboardController::class, 'editmedia'])->name('editmedia');
Route::put('updatemedia/{id}', [DashboardController::class, 'updatemedia'])->name('updatemedia');
Route::delete('deletemedia/{id}', [DashboardController::class, 'deletemedia'])->name('deletemedia');
