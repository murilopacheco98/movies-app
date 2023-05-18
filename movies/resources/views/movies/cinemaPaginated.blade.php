@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-8 lg:pt-12 ">
        <div class="text-[20px] lg:text-[24px]  tracking-wider text-orange-500 text-lg font-semibold">
            FILMES POPULARES
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
            @foreach ($playingNowMovies as $popularMovie)
                <x-movie-card :movie="$popularMovie" />
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-[20px] px-4 py-3 sm:px-6">
            <x-pagination :page="$page" :totalPages="$playingNowTotalPages" link="movies/cinema" />
        </div>
    </div>
@endSection
