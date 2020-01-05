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


Route::group(array('domain' => 'cp.nexladder.com', 'namespace' => 'Admin', 'middleware' => 'ip:2401:4900:4122:fd46:755f:6983:c18f:979c'), function() {
    

//Route::group(array('domain' => 'cp.nexladder.com', 'namespace' => 'Admin'), function() {
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

Route::get('/', array('as' => 'home', 'uses' => 'TopicController@index'));

Route::get('/users.json', array('as' => 'users.json', 'uses' => 'DashboardController@usersJson'));

Route::get('/subjects.json', array('as' => 'subjects.json', 'uses' => 'DashboardController@getSubjects'));

Route::get('/blogs.json', array('as' => 'blogs.json', 'uses' => 'DashboardController@getBlogs'));



Route::get('/blog-categories.json', array('as' => 'blogcategories.json', 'uses' => 'DashboardController@blogCategories'));

Route::get('/category-blogs/{id}', array('as' => 'category-blogs.json', 'uses' => 'DashboardController@categoryBlogs'));



Route::get('/subject-topics/{id}', array('as' => 'subject-topics.json', 'uses' => 'DashboardController@subjectTopics'));
Route::get('/topic-detail/{id}', array('as' => 'topic-detail.json', 'uses' => 'DashboardController@topicDetail'));

Route::get('/blog-detail/{id}', array('as' => 'blog-detail.json', 'uses' => 'DashboardController@blogDetail'));
Route::post('/feedback', array('as' => 'feedback.json', 'uses' => 'DashboardController@feedback'));



Route::get('/kids_play_privacy_policy', 'DashboardController@kids_play_privacy_policy')->name('dashboard.kidsplay'); 

Route::get('/about', array('as' => 'about', 'uses' => 'DashboardController@about'));

Route::get('/disclaimer', array('as' => 'disclaimer', 'uses' => 'DashboardController@disclaimer'));

Route::get('/sitemap', array('as' => 'sitemap', 'uses' => 'DashboardController@sitemap'));

Route::get('/contact-us', array('as' => 'contactus', 'uses' => 'ContactController@index'));

Route::post('/contact-us', array('as' => 'contactus.submit', 'uses' => 'ContactController@submit'));

Route::get('/online-javascript-editor', 'DashboardController@javascript_online')->name('javascript.online'); 

//Route::get('/about', array('as' => 'topic', 'uses' => 'TopicController@about'));

Route::get('/{slug}', array('as' => 'topic', 'uses' => 'TopicController@getSubjectInfo'));

Route::get('/{subject}/{slug}', array('as' => 'topics', 'uses' => 'TopicController@getSubjectTopics'));

Route::get('/cplogout', array('as' => 'dashboard.logout', 'uses' => 'DashboardController@cplogout'));

Route::get('/codemirror/{folder}/{file}', 'DashboardController@codeMirror')->name('dashboard.codemirror'); 



Route::get('/run-javascript-online', 'DashboardController@javascript_online')->name('javascript.online'); 



//Route::post('/contact-us', array('as' => 'contactus.post', 'uses' => 'ContactController@post'));


});

