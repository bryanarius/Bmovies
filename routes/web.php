<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MoviesController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
 
Route::get('/' , [MoviesController::class, 'index']);

Route::get('/movies/movie{movie}' , [MoviesController::class, 'show']);

Route::get('/actors' , [ActorsController::class, 'index']);
Route::get('/actors/page/{page?}' ,[ActorsController::class, 'index']);

Route::get('actors/actor{actor}' , [ActorsController::class, 'show']);