<?php

namespace App\Http\Controllers;

use App\ViewModels\ActorsViewModel;
use App\ViewModels\ActorViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ActorsController extends Controller
{

    public function index($page)
    {
        $tmdbKey = config('services.tmdb.token');
        $popularActors = Http::get('https://api.themoviedb.org/3/person/popular', [
            'api_key' => $tmdbKey,
            'page' => $page,
        ])
            ->json();

        $view = new ActorsViewModel(
            $popularActors['results'],
            $page,
            $popularActors['total_pages'],
            'actors',
        );

        return view('actors.index', $view);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $tmdbKey = config('services.tmdb.token');

        $popularActor = Http::get('https://api.themoviedb.org/3/person/' . $id, [
            'api_key' => $tmdbKey,
        ])
            ->json();
        $social = Http::get('https://api.themoviedb.org/3/person/' . $id . '/external_ids', [
            'api_key' => $tmdbKey,
        ])
            ->json();

        $credits = Http::get('https://api.themoviedb.org/3/person/' . $id . '/combined_credits', [
            'api_key' => $tmdbKey,
        ])
            ->json();

        $view = new ActorViewModel(
            $popularActor,
            $social,
            $credits,
            'actors',
        );

        return view('actors.show', $view);
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
