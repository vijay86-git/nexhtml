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

//Route::get('/', function () {
    //return view('welcome');
//});

/*Route::group(array('domain' => 'nexladder.com'), function() {

    Route::get('/', function () {

         Session::put('admin', 'vijay1');
         return view('welcome');
     });

});
*/
use Session;;

Route::group(array('domain' => 'cp.nexladder.com', 'namespace' => 'Admin', 'middleware' => 'adminsession'), function() {

   // Route::group(['namespace' => 'Admin', 'prefix' => 'cp'], function () {
   // 

    Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));

    Route::get('/database', array('as' => 'database', 'uses' => 'DashboardController@database'));

    Route::resource('subject','SubjectController');
    Route::resource('topic','TopicController');
    Route::resource('section','SectionController');

    Route::resource('interview','InterviewController');
    Route::resource('question','QuestionController');

    Route::get('/image', array('as' => 'image.index', 'uses' => 'ImageController@index'));
    Route::post('/store', array('as' => 'image.store', 'uses' => 'ImageController@store'));
    Route::get('/logout', array('as' => 'dashboard.logout', 'uses' => 'DashboardController@logout'));     

});

Route::group(array('domain' => 'nexladder.com'), function() {

    Route::get('/', function () {

             Session::put('admin', mt_rand());
             echo Session::get('admin');
             return view('welcome');
         });

});

