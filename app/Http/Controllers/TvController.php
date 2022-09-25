<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;
use Illuminate\Support\Facades\Http;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    $popularTv = http::get("https://api.themoviedb.org/3/tv/popular?api_key=52ffb2d1c618379d189e12ac312404be")
        ->json()['results'];

    $topRatedTv = http::get("https://api.themoviedb.org/3/tv/top_rated?api_key=52ffb2d1c618379d189e12ac312404be")
        ->json()['results'];

    $genres = http::get("https://api.themoviedb.org/3/genre/tv/list?api_key=52ffb2d1c618379d189e12ac312404be")
        ->json()['genres'];

    $viewModel = new TvViewModel(
    $popularTv,
    $topRatedTv,
    $genres
);

        return view('tv.index', $viewModel);
    }

    public function show($id) {
        $tvshow = http::get("https://api.themoviedb.org/3/tv/".$id."?api_key=52ffb2d1c618379d189e12ac312404be&append_to_response=videos,images,credits")
        ->json();

        $viewModel = new TvShowViewModel($tvshow);

        return view('tv.show', $viewModel);
    }
}
