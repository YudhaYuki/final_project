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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'indexController@homepage');


// Route::get('/test', 'testController@index');

// Route::get('test/create', 'testController@create');
    
// when the user comes to the URL /movies, run the movies_homepage method of the indexController

// Route::get('/movies/movie/test_insert', 'movieController@test_insert');

// Route::group(['middleware' => ['auth']], function() {
    
    // Route::get('roles/new', 'roleController@create');
    // Route::post('roles/new', 'roleController@store');
    // Route::get('roles/edit/{id}', 'roleController@edit');
    // Route::post('roles/edit/{id}', 'roleController@store');

// });
// Auth::routes();
// Route::get('actors/new', 'ActorController@create');
// Route::post('actors/new', 'ActorController@store');
// Route::get('actors/edit/{id}', 'ActorController@edit');
// Route::post('actors/edit/{id}', 'ActorController@store');
Auth::routes();
// these are the real routes

Route::get('/', 'indexController@homepage');
Route::get('/faq', 'HomeController@faq');
Route::get('/howItworks', 'HomeController@how');
Route::get('/contact', 'HomeController@getContact');
// added by yudha post for contact
Route::post('/contact', 'HomeController@postContact');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/activities/listing', 'activityController@listing');

Route::get('/activities/activity/{id}', 'activityController@detail')->name('activity detail');

Route::get('/activities/new', 'activityController@create')->middleware('auth');
Route::post('/activities/new', 'activityController@store')->middleware('auth');
Route::get('/activities/edit/{id}', 'activityController@edit')->middleware('auth');
Route::post('/activities/edit/{id}', 'activityController@store')->middleware('auth');


// This Routes handle user registration

Route::get('users/new', 'userController@create');
Route::post('users/new', 'userController@store');

Route::get('users/registration', 'RegistrationController@create');
// Route::post('users/new', 'userController@store');

Route::get('users/edit/{id}', 'userController@edit');
Route::post('users/edit/{id}', 'userController@store');

Route::get('/users/list', 'userController@listing');
Route::get('/users/user/{id}', 'userController@detail')->name('user detail');


// This Routes handle activity category

Route::get('activity_categories/new', 'activity_categoryController@create');
Route::post('activity_categories/new', 'activity_categoryController@store');

Route::get('activity_categories/edit/{id}', 'activity_categoryController@edit');
Route::post('activity_categories/edit/{id}', 'activity_categoryController@store');

Route::get('/activity_categories/list', 'activity_categoryController@listing');
Route::get('/activity_categories/activity_category/{id}', 'activity_categoryController@detail')->name('activityCategory detail');



// route for comments
Route::post('comments/{activity_id}', ['uses' => 'commentsController@store', 'as' =>'comments.store']);