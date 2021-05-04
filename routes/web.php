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

// get root's view and returns welcome.blade.php (= html)
Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});



// creat custom route // open on url - /test
Route::get('varTest',function(){
    
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
Route::get('hehe/pfff',function(){
    return 'HEHEHEHEHE';
});



Route::get('test',function(){
    $data = '123';
    return view('test', ['data'=>123]);
    // or: return view('test', compact('data));
    
});
