@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-8 lg:pt-10">
        <div class="popular-tv">
            <div class="tracking-wider text-orange-500 text-[20px] lg:text-[24px] font-semibold">TV SHOWS</div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
                @foreach ($popularTvs as $tvshow)
                    @if ($loop->index < 10)
                        <x-tv-card :tvshow="$tvshow" />
                    @endif
                @endforeach
            </div>
        </div> <!-- end popular-tv -->
        <div class="container mx-auto px-4 pt-8 flex justify-end">
            <a href="/tvshows/popular/page=1"
                class="text-[20px] bg-orange-600 hover:bg-orange-500 rounded-full text-black font-bold px-6 py-2">
                VER MAIS
            </a>
        </div>
        <div class="top-rated-shows pt-4 lg:pt-6">
            <div class="tracking-wider text-orange-500 text-[20px] lg:text-[24px] font-semibold">MELHORES AVALIADOS</div>
            <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
                @foreach ($topRatedTvs as $tvshow)
                    @if ($loop->index < 10)
                        <x-tv-card :tvshow="$tvshow" />
                    @endif
                @endforeach
            </div>
        </div> <!-- end top-rated-shows -->
        <div class="container mx-auto pb-[60px] px-4 pt-4 flex justify-end">
            <a href="/tvshows/melhores-avaliados/page=1"
                class="text-[20px] bg-orange-600 hover:bg-orange-500 rounded-full text-black font-bold px-6 py-2">
                VER MAIS
            </a>
        </div>
    </div>
@endsection
