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

use App\Postcard;
use App\PostcardSendingService;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/postcards',function() {

    $postcardService = new PostcardSendingService('bangladesh','5','50');

    $postcardService->hello('hello message ttt','test@test.com');

});


Route::get('/facade', function () {
    Postcard::hello('heloo','sgsgd@gmail.com');
});
