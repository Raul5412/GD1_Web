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

Route::get('/', 'HomepageController@index')->name('homepage');

Route::get('/register', 'AuthController@register')->name('auth.register');
Route::post('/register', 'AuthController@saveUser')->name('auth.save-user');

Route::get('/logout', 'AuthController@logout')->name('auth.logout');

Route::get('/account', 'HomepageController@account')->name('accounts.account');
Route::post('/account', 'HomepageController@saveAccount')->name('accounts.save-account');

Route::get('/move', 'HomepageController@move')->name('movement.movement');