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

// creat custom route // open on url - /test
route::get('test',function(){
    return 'hello world hhahahahahhhahahha';
});

// another custom url lmao
route::get('hehe/pfff',function(){
    return 'HEHEHEHEHE';
});