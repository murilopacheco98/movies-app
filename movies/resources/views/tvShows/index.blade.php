@extends('layout.main')
@dump($topRatedTv);
@dump($popularTv);
@section('content')
    <div class="container mx-auto px-4 pt-12">
        <div class="popular-tv">
            <h2 class="tracking-wider text-orange-500 text-lg font-semibold">TV SHOWS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8">
                @foreach ($popularTv as $tvshow)
                    @if ($loop->index < 10)
                        <x-tv-card :tvshow="$tvshow" />
                    @endif
                @endforeach
            </div>
        </div> <!-- end popular-tv -->

        <div class="top-rated-shows py-24">
            <h2 class="tracking-wider text-orange-500 text-lg font-semibold">MELHORES AVALIADOS</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-8">
                @foreach ($topRatedTv as $tvshow)

                    @if ($loop->index < 10)
                        <x-tv-card :tvshow="$tvshow" />
                    @endif
                @endforeach
            </div>
        </div> <!-- end top-rated-shows -->
    </div>
@endsection
