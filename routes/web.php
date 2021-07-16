<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/page', function () 
{
    return view('parent');
});

Route::get('/student', function ()
{
     return view('student');
});

Route::get('/room', function ()
{
    return view('room');
}
);
Route::get('pay', function ()
{
    return view('pay');
}
);