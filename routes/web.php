<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


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

Route::name('user.')->group(function() {
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('/login', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('auto');
    })->name('login');
    Route::post('/login', [UserController::class,'postLogin']);

    Route::get('/logout', function () {Auth::logout();});

    Route::get('/reg', function () {
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('reg');
    Route::post('/reg', [UserController::class,'postReg']);

    Route::get('/photo', function () {
        if(!Auth::check()){
            return redirect(route('welcome'));
        }
        return view('photoLoader',['path'=>Auth::user()['photo']]);
    })->name('photo');
    Route::post('/photo',[UserController::class,'photoLoad']);
});
