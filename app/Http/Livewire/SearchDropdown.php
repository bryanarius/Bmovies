<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class SearchDropdown extends Component
{
    public $search = '';

    
    public function render()
    {
        $searchResults = [];

        if(strlen($this->search) > 1) {
            
            $searchResults = Http::get("https://api.themoviedb.org/3/search/movie?api_key=52ffb2d1c618379d189e12ac312404be&query=".$this->search)
                    ->json()['results'];
        }


        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
