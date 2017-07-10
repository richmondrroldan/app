<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'articleController@index');

Route::get('art', 'articleController@create');

Route::resource('articleC', 'articleController');

Route::resource('mentors', 'mentorsController');

Route::resource('skills', 'skillsController');

Route::resource('events', 'eventsController');

Route::resource('rWorkshop', 'rWorkshopController');

Route::resource('profile' , 'profileController');

Route::get('upEvents', 'eventsController@showAll');

Route::get('findMentors', 'trainingController@findMentors');

Route::get ('mSpec/{skill}', 'mentorsController@mSpec');

Route::get('reqWorkshop', 'trainingController@reqWorkshop');

Route::get('training', 'articleController@training');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('{article}', 'articleController@article');



