@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-8 lg:pt-10">
        <div class="text-[20px] lg:text-[24px]  tracking-wider text-orange-500 font-semibold">
            FILMES POPULARES
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
            @foreach ($popularMovies as $popularMovie)
                @if ($loop->index < 10)
                    <x-movie-card :movie="$popularMovie" />
                @endif
            @endforeach
        </div>
        <div class="container mx-auto px-4 pt-8 flex justify-end">
            <a href="/movies/popular/page=1"
                class="text-[20px] bg-orange-600 hover:bg-orange-500 rounded-full text-black font-bold px-6 py-2">
                VER MAIS
            </a>
        </div>

        {{-- <div class="w-[90%] ml-[5%] lg:w-[80%] lg:ml-[10%] pt-4 lg:pt-4 "> --}}
        <div class="mt-4 text-[20px] lg:text-[24px] tracking-wider text-orange-500 font-semibold">
            FILMES DE CINEMA
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
            @foreach ($playingNowMovies as $playingNowMovie)
                @if ($loop->index < 10)
                    <x-movie-card :movie="$playingNowMovie" />
                @endif
            @endforeach
        </div>
    </div>
    {{-- </div> --}}
    <div class="container pb-[60px] mx-auto px-4 pt-8 flex justify-end">
        <a href="/movies/cinema/page=1"
            class="text-[20px] bg-orange-600 hover:bg-orange-500 rounded-full text-black font-bold px-6 py-2">
            VER MAIS
        </a>
    </div>
    {{-- {{ $popularMovies -> links() }} --}}
@endSection
