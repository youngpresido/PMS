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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function(){
    return 'Aye';
});
Route::get('/index', [
    'uses'=>'PrisonController@index',
    'as'=>'prison.index'
]);
Route::get('/create',[
   'uses'=> 'PrisonController@create',
    'as'=>"add_prisoner"
]);
Route::post('/create',[
    'uses'=> 'PrisonController@store',
     'as'=>"submitPrisoner"
 ]);
 Route::get('/prisoner/{id}',[
     'uses'=>'PrisonController@show',
    'as'=>"prisoners.show"
    ]);


 //warder
 Route::get('/warder', [
    'uses'=>"ConvictController@index",
    'as'=>'ward'
 ]);
 Route::post('/warder', [
    'uses'=>"ConvictController@store",
    'as'=>'ward_edit'
 ]);

 Route::post('/search', [
    "uses"=>"ConvictController@search",
    "as"=>"search"
    ]);
