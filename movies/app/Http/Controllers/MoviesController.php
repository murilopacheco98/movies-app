<?php

namespace App\Http\Controllers;

use App\ViewModels\MoviesViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    public function index()
    {
        $tmdbKey = config('services.tmdb.token');
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $tmdbKey,
            'page' => 1,
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

        $view = new MoviesViewModel(
            $popularMovies,
            $playingNowMovies,
            $genresMovies,
            1,
            1,
            1,
            'movies',
        );

        return view('movies.index', $view);
    }

    public function moviesPaginated($link, $page)
    {
        $tmdbKey = config('services.tmdb.token');
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $tmdbKey,
            'page' => $page,
        ])
            ->json();
        $playingNowMovies = Http::get('https://api.themoviedb.org/3/movie/now_playing', [
            'api_key' => $tmdbKey,
            'page' => $page,
        ])
            ->json();
        $genresMovies = Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => $tmdbKey,
            'language' => 'pt-BR',
        ])
            ->json();

        $view = new MoviesViewModel(
            $popularMovies['results'],
            $playingNowMovies['results'],
            $genresMovies,
            $page,
            $popularMovies['total_pages'],
            $playingNowMovies['total_pages'],
            'movies',
        );

        if ($link == 'popular') {
            return view('movies.popularPaginated', $view);
        } else {
            return view('movies.cinemaPaginated', $view);
        }
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

        return view('movies.show', [
            'moviePT' => $moviePT,
            'movieEN' => $movieEN,
            'type' => 'movies'
        ]);
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
