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


Route::group(array('domain' => 'cp.nexladder.com', 'namespace' => 'Admin', 'middleware' => 'ip:106.223.*'), function() {

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
        

}); 


/*
Route::group(array('domain' => 'nexladder.com'), function() {

    Route::get('/', function () {

             Session::put('admin', mt_rand());
             return view('welcome');
         });

    Route::get('/cache', function () {

             Artisan::call('cache:clear');

         });


});

*/


Route::group(array('domain' => 'nexladder.com'), function() {

Route::get('/cache', function () {

             Artisan::call('cache:clear');
             
         });

Route::get('/', array('as' => 'topic', 'uses' => 'TopicController@index'));

    Route::get('/about', array('as' => 'topic', 'uses' => 'TopicController@about'));

    Route::get('/{slug}', array('as' => 'topic', 'uses' => 'TopicController@getSubjectInfo'));

    Route::get('/{subject}/{slug}', array('as' => 'topics', 'uses' => 'TopicController@getSubjectTopics'));

    Route::get('/cplogout', array('as' => 'dashboard.logout', 'uses' => 'DashboardController@cplogout')); 

});

