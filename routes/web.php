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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba', function(){
    return "haloooo gan, apakabar";
});

//array JSON biasa
Route::get('coba1', function(){
    return ['rafa','rafif','rofo'];
});

//array JSON key value
Route::get('coba2', function(){
    return [
        'Nama' => 'Sahal Anam',
        'Kelas' => 'XII RPL6',
    ];
});

//array JSON dengan status code
Route::get('coba3', function(){
    return response()->json(
        [
            'nama' => 'Sahal Anam',
            'Kelas' => 'XII RPL6',
            'Hobi' => 'tidurrr'
        ],201
    );
});