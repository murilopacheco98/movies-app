<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;
    public $page;
    public $totalPages;
    public $type;
    public function __construct($popularActors, $page, $totalPages, $type)
    {
        $this->popularActors = $popularActors;
        $this->page = $page;
        $this->totalPages = $totalPages;
        $this->type = $type;
    }

    public function popularActors()
    {
        $popularActorsFormatted = collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path' => $actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w235_and_h235_face' . $actor['profile_path']
                : 'https://ui-avatars.com/api/?size=235&name=' . $actor['name'],
                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                    collect($actor['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(', '),
            ])->only([
                    'name',
                    'id',
                    'profile_path',
                    'known_for',
                ]);
        });
        return $popularActorsFormatted;
    }
}
