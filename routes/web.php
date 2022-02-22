<?php

use App\Http\Controllers\UserController;
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

// Default route bawaan create project laravel
Route::get('/', function () {
    return view('welcome');
});

// Route view
Route::view('/home', 'viewName');

// Route redirect
Route::redirect('/lama', '/baru', 301);

// Route parameter
Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});

// Route with optional parameter
Route::get('/user/{id?}', function ($id = null) {
    return 'User ID: ' . $id;
});

// Route with required parameter and controller laravel 8
Route::get('/user/{id}', [UserController::class, 'show']);
