<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register','App\Http\Controllers\Auth\RegisterController@index')->name('register');
Route::post('/register',[App\Http\Controllers\Auth\RegisterController::class,'insert'])->name('user.register');

Route::get('fileUpload', function () {
    return view('pages.fileUpload');
 })->name('fileUpload');

Route::get('fileUpload',[App\Http\Controllers\FileUploadController::class,'index'])->name('fileUpload');

Route::post('fileUpload/upload',[App\Http\Controllers\FileUploadController::class,'import1'])->name('upload.import');
Route::post('fileUpload/reset1',[App\Http\Controllers\FileUploadController::class,'resetDB1'])->name('upload.reset1');

Route::post('fileUpload/total',[App\Http\Controllers\FileUploadController::class,'import2'])->name('upload.total');
Route::post('fileUpload/reset2',[App\Http\Controllers\FileUploadController::class,'resetDB2'])->name('upload.reset2');
//Route::view('fileUpload','fileUpload');
// Route::view('Pages.chart','Pages.chart');

Route::get('Fetch',[App\Http\Controllers\FileUploadController::class,'getData'])->name('fetch');
Route::post('/Fetch','App\Http\Controllers\FileUploadController@getData')->name('fetch1');