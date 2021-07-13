<?php

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

Route::get('/', 'HomeController@index');
Route::get('/works', 'HomeController@works');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/library-song', 'HomeController@librarySong');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact-form', 'ContactController@storeContactForm')->name('contact-form.store');

Route::get('admin/login','UserController@Login');
Route::post('admin/login','UserController@LoginAuth');
Route::get('admin/logout','UserController@Logout');


Route::group(['prefix' => 'admin','middleware' => 'adminAuth'],function(){

	Route::get('/','AdminController@index');
    Route::post('general-setting','AdminController@generalSetting');
    // Route group category
    Route::group(['prefix' => 'library-music'],function(){
        Route::delete('/delete/{id}', 'LibraryMusicController@destroy');
        Route::resource('/','LibraryMusicController');
        Route::get('/{id}/edit','LibraryMusicController@edit');
        Route::post('/{id}','LibraryMusicController@update');
        Route::get('/{id}/edit','LibraryMusicController@edit');
    });

    Route::group(['prefix' => 'work'],function(){
        Route::delete('/delete/{id}', 'WorkController@destroy');
        Route::resource('/','WorkController');
        Route::get('/{id}/edit','WorkController@edit');
        Route::post('/{id}','WorkController@update');
    });

    Route::group(['prefix' => 'about-us'],function(){
        Route::get('/','AdminController@aboutUs');
        Route::post('/','AdminController@aboutUsUpdate');
    });

    Route::group(['prefix' => 'radio'],function(){
        Route::delete('/delete/{id}', 'RadioController@destroy');
        Route::resource('/','RadioController');
        Route::get('/{id}/edit','RadioController@edit');
        Route::post('/{id}','RadioController@update');
    });
});
