<?php

namespace App\Http\Controllers;

use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $tmdbKey = config('services.tmdb.token');
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $tmdbKey,
        ])
            ->json()['results'];
        $playingNowMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing', [
            'api_key' => $tmdbKey,
        ])
            ->json()['results'];
        $genresMovies = Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => $tmdbKey,
            'language' => 'pt-BR',
        ])
            ->json();

        $view = new MovieViewModel(
            $popularMovies,
            $playingNowMovies,
            $genresMovies
        );

        return view('movies.index', $view);
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

        $moviePT = Http::get('https://api.themoviedb.org/3/movie/' . $id, [
            'api_key' => $tmdbKey,
            'append_to_response' => 'credits,images,videos',
            'language' => 'pt-BR',
        ])
            ->json();

        $movieEN = Http::get('https://api.themoviedb.org/3/movie/' . $id, [
            'api_key' => $tmdbKey,
            'append_to_response' => 'credits,images,videos',
            // 'language' => 'pt-BR',
        ])
            ->json();
        dump($movieEN);
        return view('movies.show', ['moviePT' => $moviePT, 'movieEN' => $movieEN]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
