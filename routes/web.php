<?php

use Illuminate\Support\Facades\Route;
//1 localization
use App\Http\Controllers\BeelineLocaleController;
//2 Send mail
use App\Http\Controllers\ContactController;
//3Upload Photo
use App\Http\Controllers\PhotoController;
//4
use App\Http\Controllers\PostController;
//5
use App\Http\Controllers\ClientController;








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

Route::get('/', function () {
    return view('welcome');
});
/// 1) part localizaton
Route::get('/home/{locale}',[BeelineLocaleController::class,'localization'])->name('home');
//
Route::get('/login', function () {
    return view('login');
})->name('login');
///2) contact us  send email
Route::get('contact-us',[ContactController::class,'contact']);
Route::post('/send-message' ,[ContactController::class,'sendEmail'])->name('contact.send');

//3)user upload image
Route::get('/down', [PhotoController::class,'create'])->name('download');
Route::post('/down', [PhotoController::class,'store']);
//4 student
Route::get('/stud',[PostController::class,'addPost']);
Route::post('/create-post',[PostController::class,'createPost'])->name('post.create');
//register
Route::get('regis',[ClientController::class,'addUser']);
Route::post('/create-users',[ClientController::class,'createUser'])->name('user.create');