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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('layoutflexbox', 'LayoutflexboxController@index')->name('layoutflexbox');

    Route::get('parrilla', 'ParrillaController@index')->name('parrilla');

    Route::get('vertical1', 'Vertical1Controller@index')->name('vertical1');

    Route::get('vertical', 'VerticalController@index')->name('vertical');

    Route::get('prova', 'ProvaController@index')->name('prova');

});
