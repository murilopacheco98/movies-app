<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $tmdbKey = config('services.tmdb.token');
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => $tmdbKey,
        ])
            ->json()['results'];
        $genresMovies = Http::get('https://api.themoviedb.org/3/genre/movie/list', [
            'api_key' => $tmdbKey,
            'language' => 'pt-BR',
        ])
            ->json();

        $popularMoviesFormatted = [];
        foreach ($popularMovies as $popularMovie) {
            $popularMovie['genres'] = [];
            $genres = [];
            foreach ($popularMovie['genre_ids'] as $popularMovieGenre)
                foreach ($genresMovies['genres'] as $genreMovie)
                    if ($popularMovieGenre == $genreMovie['id']) {
                        $genre = [];
                        $genre['id'] = $popularMovieGenre;
                        $genre['name'] =  $genreMovie['name'];
                        array_push($genres, $genre);
                    }
            $popularMovie['genres'] = $genres;
            array_push($popularMoviesFormatted, $popularMovie);
        }
        dump($popularMoviesFormatted);
        return view('index', ['popularMovies' => $popularMoviesFormatted]);
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
        return view('show', ['moviePT' => $moviePT, 'movieEN' => $movieEN]);
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
