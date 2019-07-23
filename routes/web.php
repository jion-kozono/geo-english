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
Route::get('hello', function () {
    return view('hello.index');
});
Route::get('hello/profile', function () {
    return view('hello.profile');
});
Route::get('hello/skillTest', function () {
    return view('hello.skillTest');
});
Route::get('hello/TOEFL', function () {
    return view('hello.TOEFL');
});
Route::get('hello/TOEIC', function () {
    return view('hello.TOEIC');
});
Route::get('hello/EIKEN', function () {
    return view('hello.EIKEN');
});
Route::get('hello/books', function () {
    return view('hello.books');
});
Route::get('hello/rules', function () {
    return view('hello.rules');
});
Route::get('hello/privacy', function () {
    return view('hello.privacy');
});
Route::get('hello/contact', function () {
    return view('hello.contact');
});
Route::get('hello/registers', function () {
    return view('hello.registers');
});
Route::get('hello/logins', function () {
    return view('hello.logins');
});
Route::resource('test/inTest', 'TestController', ['only' => ['index']]);



