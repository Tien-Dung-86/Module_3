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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/input', function () {
    return view('input');
});

Route::post('/show_result', function (Illuminate\Http\Request $request) {
    $translateWord = $request->search;
    $results = [
        'hello' => 'xin chào',
        'study' => 'học',
        'read' => 'đọc',
        'write' => 'viết',
        'remember' => 'ghi nhớ'
    ];
    foreach ($results as $word => $value)
        if ($translateWord == $word) {
            return view('show_result', compact(['translateWord', 'results', 'value', 'word']));
        } else {
            return view('input');
        }
});
