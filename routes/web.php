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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('thanks/{name}', 'PagesController@thanks')->name('thanks');
Route::get('/thankyou', 'PagesController@thankyou')->name('thankyou');

/* Route::post('/contact', function () {
    $data = request() -> all();
    echo"Email: ".$data['email'],'<br>';
    echo"Subject: ".$data['subject'],'<br>';
    echo"Message: ".$data['body'];
});
Route::post('/signup', function () {
    $data = request() -> all();
    echo"Full Name: ".$data['name'],'<br>';
    echo"Email: ".$data['email'],'<br>';
    echo"First Password: ".$data['firstpassword'],'<br>';
    echo"Second Password: ".$data['secondpassword'];
});
Route::post('/signin', function () {
    $data = request() -> all();
    echo"Username: ".$data['username'],'<br>';
    echo"Password: ".$data['password'];
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


