<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('folder/about');
// });

//  Route::get('/image', function () {
//      return view('folder/image');
//  })->name('img');

//  Route::get('/login', function () {
//      return view('folder/login');
//  })->name('log');

Route::get('home', 'samplecontroller@home')->name('home');
Route::get('about', 'samplecontroller@about')->name('about');
Route::get('log', 'samplecontroller@login')->name('log');
Route::get('img', 'samplecontroller@image')->name('img');
Route::get('tab', 'samplecontroller@table')->name('tab');

Route::get('list', 'samplecontroller@list')->name('list');
Route::Post('save', 'samplecontroller@save')->name('save');
Route::get('edit/{id}', 'samplecontroller@edit')->name('edit');
Route::Post('save-edit/{id}', 'samplecontroller@update')->name('save-edit');
Route::get('delete/{id}', 'samplecontroller@delete');


// Route::get('/index', function () {
//     return view('CRUD/index');
// });

// Route::get('/add', function () {
//     return view('CRUD/add');
// });

Route::get('index', 'playercontroller@index')->name('index');
Route::get('add', 'playercontroller@add')->name('add');
Route::Post('savee', 'playercontroller@savee')->name('savee');
Route::get('playeredit/{id}', 'playercontroller@edit')->name('playeredit');
Route::Post('editsave/{id}', 'playercontroller@update')->name('editsave');
Route::get('delete/{id}', 'playercontroller@die');

