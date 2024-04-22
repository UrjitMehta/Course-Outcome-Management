<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Home page
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Redirect root to login
Route::redirect('/', '/login');

// Registration (corrected to use a single, clear route)
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@insert')->name('register');

// Question routes (using more descriptive names)
Route::get('/question/1', 'App\Http\Controllers\HomeController@index')->name('question.1');
Route::get('/question/2', 'App\Http\Controllers\Que2Controller@index')->name('question.2');

// Excel and import routes
Route::get('/excel', 'App\Http\Controllers\ExcelController@index')->name('excel');
Route::get('/import', 'App\Http\Controllers\ImportController@index')->name('import');
Route::get('/download', 'App\Http\Controllers\ExcelController@download')->name('download');

// Data saving routes (using more descriptive names)
Route::post('/home/save', 'App\Http\Controllers\HomeController@save')->name('home.save');
Route::post('/question/2/save', 'App\Http\Controllers\Que2Controller@save')->name('question.2.save');
Route::post('/question/3/save', 'App\Http\Controllers\Que3Controller@save')->name('question.3.save');
Route::post('/excel/save', 'App\Http\Controllers\ExcelController@save')->name('excel.save');
Route::post('/import/save', 'App\Http\Controllers\ImportController@import')->name('import.data');
