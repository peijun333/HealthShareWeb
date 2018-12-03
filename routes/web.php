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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::post('register/pre_check', 'Auth\RegisterController@pre_check')->name('register.pre_check');

//本会員登録入力
Route::get('register/verify/{token}', 'Auth\RegisterController@showForm');
Route::post('register/main_check', 'Auth\RegisterController@mainCheck')->name('register.main.check');
Route::post('register/main_register', 'Auth\RegisterController@mainRegister')->name('register.main.registered');

//各アプリへの移動
Route::get('/home/calorie', 'Calorie\CalorieController@calorie')->name('calorie');
Route::post('','Calorie\CalorieController@calorieAPI')->name('calorie.api');
//記録
Route::get('/home/record', 'Record\RecordController@record')->name('record');

//血圧・体重・体脂肪率
Route::get('/home/daily', 'Daily\DailyController@daily')->name('daily');
Route::post('/home/daily', 'Daily\DailyController@insert')->name('insert');