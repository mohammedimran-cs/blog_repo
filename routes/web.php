<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/component', function () {
    $data = [
        'name' => 'imran',
        'age' => 24,
    ];
    dump($data);
    return view('show');
});
