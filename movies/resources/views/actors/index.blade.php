@extends('layout.main')
@section('content')
    <div class="container mx-auto px-4 pt-8 lg:pt-10 ">
        <div class="text-[20px] lg:text-[24px] tracking-wider text-orange-500 font-semibold">
            ATORES
        </div>
        <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-8">
            @foreach ($popularActors as $popularActor)
                @if ($loop->index < 20)
                    <div class="actor">
                        <a href="/actors/{{ $popularActor['id'] }}">
                            <img src="{{ $popularActor['profile_path'] }}" alt="profile image"
                                class="hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="mt-2">
                            <a href="/actors/{{ $popularActor['id'] }}"
                                class="text-lg hover:text-gray-300">{{ $popularActor['name'] }}</a>
                            <div class="text-sm text-gray-400">{{ $popularActor['known_for'] }}</div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-[20px] px-4 py-3 sm:px-6">
            <x-pagination :page="$page" :totalPages="$totalPages" link="actors" />
        </div>
    </div>
@endSection
