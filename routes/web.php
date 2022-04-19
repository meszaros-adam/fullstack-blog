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

Route::get('/', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'blogSingle']);
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'allBlogs']);
Route::get('/category/{categoryName}/{id}', [App\Http\Controllers\BlogController::class, 'categoryIndex']);
Route::get('/tag/{tagName}/{id}', [App\Http\Controllers\BlogController::class, 'tagIndex']);
Route::get('/search', [App\Http\Controllers\BlogController::class, 'search']);

//Auth
Route::post('/registration', [App\Http\Controllers\BloguserController::class, 'registration']);
Route::post('/login', [App\Http\Controllers\BloguserController::class, 'login']);
Route::get('/login_page', [App\Http\Controllers\BlogController::class, function(){
    return view('/auth/login');
}]);
Route::get('/registration_page', [App\Http\Controllers\BlogController::class, function(){
    return view('/auth/register');
}]);
