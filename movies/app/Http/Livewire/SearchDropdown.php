<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public $type;

    public function render()
    {
        $searchResults = [];
        $tmdbKey = config('services.tmdb.token');

        if ($this->type == 'movies') {
            if (strlen($this->search) >= 2) {
                $searchResults = Http::get('https://api.themoviedb.org/3/search/movie', [
                    'query' => $this->search,
                    'api_key' => $tmdbKey,
                ])
                    ->json()['results'];
            }
        } elseif ($this-> type == 'tvshows') {
            if (strlen($this->search) >= 2) {
                $searchResults = Http::get('https://api.themoviedb.org/3/search/tv', [
                    'query' => $this->search,
                    'api_key' => $tmdbKey,
                ])
                    ->json()['results'];
            }
        } elseif ($this-> type == 'actors') {
            if (strlen($this->search) >= 2) {
                $searchResults = Http::get('https://api.themoviedb.org/3/search/person', [
                    'query' => $this->search,
                    'api_key' => $tmdbKey,
                ])
                    ->json()['results'];
            }
        }

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(10),
        ]);
    }
}
