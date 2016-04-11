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

Route::get('/', function () {
    return view('welcome');
});

/*
* Intervention Images Request Handler
* handle all the images request from user and affiliate
* show images in html img tag
*/
Route::get('avatars/{imageName}','ImagesController@getAvatar');

//show dashboard
Route::get('main','PagesController@showMainPage');
//show users list
Route::get('users','UsersController@showUserList');
//show one user
Route::get('users/{id}','UsersController@showUserDetail');

//show affiliate list
Route::get('affiliates','UsersController@showAffiliateList');
//show one affiliate
Route::get('affiliates/{id}','UsersController@showAffiliate');

//show tasks list
Route::get('tasks','TasksController@showTaskList');

//show offer list
Route::get('offers','TasksController@showOfferList');

//show FAQ modifer
Route::get('faq','PagesController@showFAQModifier');

//show send SMS page
Route::get('send-sms','PagesController@showSendSMS');
//handle send SMS action
Route::post('send-sms','PagesController@sendMessage');





