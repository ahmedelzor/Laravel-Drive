<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');


##########   Drives Route  #########

// Displye Data 
Route::get('drives' , 'DriveController@index' )->name('drive.index');

// create Data 
Route::get('drives/create' , 'DriveController@create' )->name('drive.create');

// store Data 
Route::post('drives/store' , 'DriveController@store' )->name('drive.store');

// show Data 
Route::get('drives/show/{id}' , 'DriveController@show' )->name('drive.show');

// edit Data 
Route::get('drives/edit/{id}' , 'DriveController@edit' )->name('drive.edit');

// update Data 
Route::post('drives/update/{id}' , 'DriveController@update' )->name('drive.update');

// Remove Data 
Route::get('drives/destroy/id/{id}' , 'DriveController@destroy' )->name('drive.destroy');

// download Data 
Route::get('drives/download/id/{id}' , 'DriveController@download' )->name('drive.download');