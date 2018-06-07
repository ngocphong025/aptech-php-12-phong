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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/phong', 'phong');

Route::get('user/{id}', function ($id) {
    switch ($id){
        case 1:
            return 'Hello quy';
        case 2:
            return 'hello aa';
        default:
            return 'hello 00000000';
    }
});
Route::prefix('thoitrang')->group(function () {
    Route::get('vietnam', function () {
        return "thoitrangvietnam";
    });
    Route::get('quocte', function(){
        return "thoitrangquocte";
    });
});
Route::get('/', function () {
    return view('greating', ['name' => 'James']);
});
Route::view('/child', 'child');
Route::view('/contact', 'contact');
Route::view('/blog-example', 'blog-example');
