<?php
use App\User;
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

//    $users = User::all();
//    return view('welcome',compact('users'));
    return redirect('/home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');