<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel
{
    public $popularMovies;
    public $playingNowMovies;
    public $genres;

    public function __construct($popularMovies, $playingNowMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->playingNowMovies = $playingNowMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        // return collect($this->popularMovies)->dump();
        return dump($this->formatMovies($this->popularMovies));
    }

    public function playingNowMovies()
    {
        return $this->formatMovies($this->playingNowMovies);
    }

    public function genres($movieId)
    {
        foreach ($this->genres['genres'] as $genreMovie)
            if ($genreMovie['id'] == $movieId) {
                return $genreMovie['name'];
            }
    }

    private function formatMovies($movies)
    {
        return collect($movies)->map(function ($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 . '%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                'poster_path', 'id', 'genre_ids', 'title', 'vote_average', 'overview', 'release_date', 'genres',
            ]);
        });
    }
}
