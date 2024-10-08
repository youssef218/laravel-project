<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [homeController::class , 'index'])->name('homepage');
Route::get('/{id}', [homeController::class , 'show'])
->where('id', '\d+') // This ensures that only numeric values are accepted
->name('homepage.show');
