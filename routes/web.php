<?php
use Illuminate\Auth\Middleware\Authenticate;
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

Route::redirect('/', '/index');

Route::get('/index',
    [
        'as' => 'mainPage',
        'middleware' => 'auth',
        'uses' => 'CornController@show'
    ]);

Route::get('/logout', [
    'uses' => function() {
            Auth::logout();
            return redirect()->route('mainPage');
        },
    'as' => 'logout',
]);



Route::get('/adddeal',  [
   'uses' => 'DealController@create',
    'middleware' => 'auth',
   'as' => 'Deal',
]);


Route::get('/month', [
    'uses' => 'CornController@analiz',
    'middleware' => 'auth',
    'as' => 'month',
]);
//Route::post('/insert',[
//    'as' => 'add',
//    'middleware' => 'auth',
//    'uses' => 'CornController@addDeal_DB'
//]);

