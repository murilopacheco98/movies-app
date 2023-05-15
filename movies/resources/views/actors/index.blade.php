@extends('layout.main')
@section('content')
    <div class="w-[90%] ml-[5%] lg:w-[80%] lg:ml-[10%] pt-8 lg:pt-12 ">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            ATORES
        </h2>
        <div class="mt-8 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-5 gap-8 lg:gap-8">
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
    </div>
@endSection
