<?php

use App\Mail\ContactMessageCreated;

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

Route::get('/',[
    'as'=>'home_path',
    'uses'=>'PagesController@home'
]);
Route::get('/test-email',function(){
    return new ContactMessageCreated('BROU','brouyaoeric7@gmail.com','je suis content');
});

Route::get('/about',[
    'as'=>'about_path',
    'uses'=>'PagesController@about'
]);
Route::get('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactController@create'
]);
Route::post('/contact',[
    'as'=>'contact_path',
    'uses'=>'ContactController@store'
]);
