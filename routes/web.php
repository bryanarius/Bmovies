<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MoviesController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
 
Route::get('/' , [MoviesController::class, 'index']);

 
Route::get('/movies' , [MoviesController::class, 'show']);