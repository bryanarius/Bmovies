<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index() {
        
        $popularMovies = http::get("https://api.themoviedb.org/3/movie/popular?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['results'];

        $nowPlayingMovies = http::get("https://api.themoviedb.org/3/movie/now_playing?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['results'];

        $genresArray = http::get("https://api.themoviedb.org/3/genre/movie/list?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });


        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlayingMovies' => $nowPlayingMovies,
            'genres' => $genres,
        ]);
    }

    public function show($movie) {
        $movie = http::get("https://api.themoviedb.org/3/movie/".$movie."?api_key=52ffb2d1c618379d189e12ac312404be&append_to_response=videos,images,credits")
        ->json();


        return view('show', [
            'movie' => $movie
        ]);
    }
}
