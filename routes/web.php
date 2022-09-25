<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use Illuminate\Routing\RouteUrlGenerator;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
 
Route::get('/' , [MoviesController::class, 'index']);
Route::get('/movies/movie{id}' , [MoviesController::class, 'show']);

Route::get('/tv' , [TvController::class, 'index']);
Route::get('/tv/{id}' , [TvController::class, 'show']);

Route::get('/actors' , [ActorsController::class, 'index']);
Route::get('/actors/page/{page?}' ,[ActorsController::class, 'index']);

Route::get('actors/actor{id}' , [ActorsController::class, 'show']);

