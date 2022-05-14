<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/image_upload', [HomeController::class, 'upload_image'])->name('upload.image');
Route::post('/like_image', [HomeController::class, 'like_image'])->name('like.image');
Route::post('/image_section', [HomeController::class, 'image_section'])->name('image.section');
Route::post('/user_image_section', [HomeController::class, 'user_image_section'])->name('user.image.section');