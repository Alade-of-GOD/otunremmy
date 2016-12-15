<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/about', function() {
    return view('aboutotun');
});

Route::get('/contact', function() {
    return view('contactotun');
});

Route::get('/t', function () {
    return view('t');
});

Route::get('role', [
    'middleware' => 'Role:Admin',
    'uses' => 'TestController@index',
]);

Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('base URI', 'controller@method');

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showProfile'
]);

Route::get('/usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

//Route::controller('base URI', 'ImplicitController');

//Route::controller('test','ImplicitController');

class MyClass{
    public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');
