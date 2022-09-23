<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\ActorsViewModel;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{
    public function index($page = 1)
    {
        $popularActors = Http::get("https://api.themoviedb.org/3/person/popular?api_key=52ffb2d1c618379d189e12ac312404be&page=".$page)
            ->json()['results'];

        $viewModel = new ActorsViewModel($popularActors, $page);

        return view('actors.index', $viewModel);
    }

    public function show() 
    {
        return view('actors.show');
    }
}