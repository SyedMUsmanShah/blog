<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// FrontendController

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/available_cats', [FrontendController::class, 'available_cats'])->name('available_cats');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/send', [FrontendController::class, 'message'])->name('message');


// BackendController

Route::get('/admin', [BackendController::class, 'index'])->name('admin.index');

Auth::routes();

// index
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// gallery routes
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/addgallery', [App\Http\Controllers\HomeController::class, 'addgallery'])->name('addgallery');
Route::post('/addgallery', [App\Http\Controllers\HomeController::class, 'uploadgallery'])->name('addgallery');
Route::get('/delgallery/{id}', [App\Http\Controllers\HomeController::class, 'delgallery'])->name('delgallery');
// available_cats routes
Route::get('/availableCats', [App\Http\Controllers\HomeController::class, 'availableCats'])->name('availableCats');
Route::get('/addCats', [App\Http\Controllers\HomeController::class, 'addCats'])->name('addCats');
Route::post('/addCats', [App\Http\Controllers\HomeController::class, 'storeCats'])->name('storeCats');
Route::get('/updateCat/{id}', [App\Http\Controllers\HomeController::class, 'updateCat'])->name('updateCat');
Route::Post('/editCat/{id}', [App\Http\Controllers\HomeController::class, 'editCat'])->name('editCat');
Route::get('/deleteCat/{id}', [App\Http\Controllers\HomeController::class, 'deleteCat'])->name('deleteCat');
// about page
Route::get('/admin/about', [App\Http\Controllers\HomeController::class, 'about'])->name('admin.about');
Route::get('/admin/editabout', [App\Http\Controllers\HomeController::class, 'editAbout'])->name('editAbout');
Route::post('/admin/updateabout/{id}', [App\Http\Controllers\HomeController::class, 'updateAbout'])->name('updateAbout');
// contact page
Route::get('/admin/contact', [App\Http\Controllers\HomeController::class, 'viewMessages'])->name('viewMessages');
Route::get('/admin/contact/del/{id}', [App\Http\Controllers\HomeController::class, 'delMessages'])->name('delMessages');
Route::get('/admin/editContact/', [App\Http\Controllers\HomeController::class, 'editContact'])->name('editContact');
Route::post('/admin/updateContact/{id}', [App\Http\Controllers\HomeController::class, 'updateContact'])->name('updateContact');
// update password
Route::get('/editPassword', [App\Http\Controllers\HomeController::class, 'editPassword'])->name('editPassword');
Route::post('/updatePassword{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');
