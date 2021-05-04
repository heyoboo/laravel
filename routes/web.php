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
    
    // variable declaration
    $data = 'abc';
    $hehe = 123;
    $hmm = 123.123;
    $no = true;
    $stuff = [1,2,3];
    // obj structure
    $obj = ['a'=>123, 'b'=>'lmao'];

    $num1 = 5;
    $num2 = 2;

    // print
    dd($data,
    $hehe,
    $hmm,
    $no,
    $stuff,
    $obj['a'],
    $num1 + $num2,
    $num1 . $num2);

    
    return 'hello world hhahahahahhhahahha';
});

// another custom url lmao
route::get('hehe/pfff',function(){
    return 'HEHEHEHEHE';
});