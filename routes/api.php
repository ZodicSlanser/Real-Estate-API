<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\OwnerController;



Route::apiResource('owners', OwnerController::class);
Route::apiResource('houses', HouseController::class);
Route::get('owners/{owner}/houses', [OwnerController::class, 'houses']);

