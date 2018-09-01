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

Route::get('/','PageController@routine');
Route::get('/admin','PageController@admin');



Route::get('/updateNews/{admin}','PageController@updateNews');
Route::post('/updateNews', ['as'=>'update.News', 'uses' => 'PageController@updateNewsPage']);



Route::get('/updateRoutineSoSelectABatch/{admin}','PageController@updateRoutineSoSelectABatch');
Route::post('/batchSelectedForUpdatingRoutine', ['as'=>'update.batchSelectedToUpdateRoutine', 'uses' => 'PageController@batchSelectedForUpdatingRoutine']);
Route::post('/updateYearRoutine', ['as'=>'update.YearRoutine', 'uses' => 'PageController@updateBatchRoutine']);
//Route::get('/updateRoutine','PageController@updateRoutine');



Route::get('/login','PageController@login');
Route::post('/loggedin', ['as'=>'login.admin', 'uses' => 'PageController@loggedin']);




Route::get('/addAdmin/{admin}','PageController@addAdmin');
Route::post('/adminadded', ['as'=>'add.admin', 'uses' => 'PageController@adminadded']);




Route::get('/updateBatch/{admin}','PageController@updateBatch');
Route::post('/updateBatchNumber', ['as'=>'update.BatchNumber', 'uses' => 'PageController@updateBatchNumber']);
Route::post('/updateBatchNumberAndName', ['as'=>'update.BatchNumberAndName', 'uses' => 'PageController@updateBatchNumberAndName']);

//Route::get('/home', 'HomeController@index')->name('home');

















