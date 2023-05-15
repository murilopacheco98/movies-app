@extends('layout.main')
@section('content')

<div class="w-[90%] ml-[5%] lg:w-[80%] lg:ml-[10%] pt-8 lg:pt-12 ">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        FILMES POPULARES
    </h2>
    <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-8">
        @foreach($popularMovies as $popularMovie)
            @if ($loop->index < 10)
                <x-movie-card :movie="$popularMovie" />
            @endif
        @endforeach
    </div>
</div>
<div class="w-[90%] ml-[5%] lg:w-[80%] lg:ml-[10%] pt-8 lg:pt-12 ">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
        RECENTES
    </h2>
    <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-8">
        @foreach($playingNowMovies as $playingNowMovie)
            @if ($loop->index < 8)
                <x-movie-card :movie="$playingNowMovie" />
            @endif
        @endforeach
    </div>
</div>

@endSection
