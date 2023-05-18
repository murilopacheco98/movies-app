<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvShowsViewModel extends ViewModel
{
    public $popularTvs;
    public $topRatedTvs;
    public $genres;
    public $page;
    public $popularTvTotalPages;
    public $topRatedTotalPages;
    public $type;

public function __construct($popularTvs, $topRatedTvs, $genres, $page, $popularTvTotalPages, $topRatedTotalPages, $type)
    {
        $this->popularTvs = $popularTvs;
        $this->topRatedTvs = $topRatedTvs;
        $this->genres = $genres;
        $this->page = $page;
        $this->popularTvTotalPages = $popularTvTotalPages;
        $this->topRatedTotalPages = $topRatedTotalPages;
        $this->type = $type;
    }

    public function popularTvs()
    {
        return $this->formatTv($this->popularTvs);
    }

    public function topRatedTvs()
    {
        return $this->formatTv($this->topRatedTvs);
    }

    public function genres()
    {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatTv($tv)
    {
        return collect($tv)->map(function ($tvshow) {
            $genresFormatted = collect($tvshow['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($tvshow)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvshow['poster_path'],
                'vote_average' => $tvshow['vote_average'] * 10 . '%',
                'first_air_date' => Carbon::parse($tvshow['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
            ])->only([
                    'poster_path',
                    'id',
                    'genre_ids',
                    'name',
                    'vote_average',
                    'overview',
                    'first_air_date',
                    'genres',
                ]);
        });
    }
}
