<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcomee');
});

Route::get('/ff/{ff}', function (Request $request) {
    $ff = $request->ff;
    return view('welcomee', [
        'ff'=> $ff
    ]);
});