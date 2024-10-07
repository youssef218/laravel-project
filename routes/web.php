<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', ['\App\Http\Controllers\homeController' , 'index']);

Route::get('/ff/{ff}', function (Request $request) {
    $ff = $request->ff;
    return view('welcomee', [
        'ff'=> $ff
    ]);
});