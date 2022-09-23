<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\ViewModels\MovieViewModel;
use App\ViewModels\MoviesViewModel;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index() {
        
        $popularMovies = http::get("https://api.themoviedb.org/3/movie/popular?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['results'];

        $nowPlayingMovies = http::get("https://api.themoviedb.org/3/movie/now_playing?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['results'];

        $genres = http::get("https://api.themoviedb.org/3/genre/movie/list?api_key=52ffb2d1c618379d189e12ac312404be")
            ->json()['genres'];

        

    //     return view('index', [
    //         'popularMovies' => $popularMovies,
    //         'nowPlayingMovies' => $nowPlayingMovies,
    //         'genres' => $genres,
    //     ]);
    // }

    $viewModel = new MoviesViewModel(
        $popularMovies,
        $nowPlayingMovies,
        $genres
    );

     return view('movies.index', $viewModel);
    }

    public function show($movie) {
        $movie = http::get("https://api.themoviedb.org/3/movie/".$movie."?api_key=52ffb2d1c618379d189e12ac312404be&append_to_response=videos,images,credits")
        ->json();

        $viewModel = new MovieViewModel($movie);

        return view('movies.show', $viewModel);
    }
}
