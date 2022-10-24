<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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

Route::get('about_us', function () {
    return view('about_us');
});


Route::get('about_us', function () {
    return view('about_us');
});
Route::get('about_us_get', function () {
    return view('about_us_get');
});



Route::get('/signup', function () 
{
    return view('/signup');
});
Route::get('/login', function () 
{
    
    return view('/login');
});

Route::get('/register', function () 
{
    
    return view('/register ');
});




Route::get('/', function () 
{
    return view('/home');
});






Route::get('/price', function () {
    return view('/price');
});

Route::get('/user_post', function () {
    return view('/user_post');
});

Route::get('/schdule', function () {
    return view('/schdule');
});

Route::get('/analysis', function () {
    return view('/analysis');
});



/*Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
//Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});
*/
Route::redirect('login','user_post' );
Auth::routes();



