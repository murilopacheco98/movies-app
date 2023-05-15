<?php

namespace App\Http\Controllers;

use App\ViewModels\TvShowsViewModel;
use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;
use Illuminate\Support\Facades\Http;

class TvShowsController extends Controller
{
    public function index()
    {
        $tmdbKey = config('services.tmdb.token');
        $popularTv = Http::get('https://api.themoviedb.org/3/tv/popular', [
            'api_key' => $tmdbKey,
        ])
            ->json()['results'];

        $topRatedTv = Http::get('https://api.themoviedb.org/3/tv/top_rated', [
            'api_key' => $tmdbKey,
        ])
            ->json()['results'];

        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list', [
            'api_key' => $tmdbKey,
        ])
            ->json()['genres'];

        $viewModel = new TvShowsViewModel(
            $popularTv,
            $topRatedTv,
            $genres,
        );

        return view('tvShows.index', $viewModel);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $tmdbKey = config('services.tmdb.token');
        $tvshow = Http::get('https://api.themoviedb.org/3/tv/' . $id, [
            'api_key' => $tmdbKey,
            'append_to_response' => 'credits,videos,images',
        ])
            ->json();

        $viewModel = new TvShowViewModel($tvshow);
        // dump($viewModel);
        return view('tvShows.show', $viewModel);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
