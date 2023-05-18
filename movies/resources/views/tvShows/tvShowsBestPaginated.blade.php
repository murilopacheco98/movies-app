@extends('layout.main')
@section('content')
<div class="container mx-auto px-4 pt-8 lg:pt-10 ">
        <div class="text-[20px] lg:text-[24px] tracking-wider text-orange-500 font-semibold">
            SHOWS DE TV POPULARES
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-8">
            @foreach ($topRatedTvs as $topRatedTv)
                <x-tv-card :tvshow="$topRatedTv" />
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-[20px] px-4 py-3 sm:px-6">
            <x-pagination :page="$page" :totalPages="$popularTvTotalPages" link='tvshows/popular' />
        </div>
    </div>
@endSection
