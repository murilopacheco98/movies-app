{{-- @dump($searchResults) --}}
<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    @if ($type == 'movies')
        <input type="text" wire:model="search"
            class="bg-gray-800 text-sm rounded-full w-64 lg:w-80 px-4 pl-8 py-2 focus:outline-none focus:shadow-[0_0_2px_0_rgb(0,0,0,0.05)] focus:shadow-slate-100"
            placeholder="Pesquisar filme" @focus="isOpen = true">
    @elseif ($type == 'tvshows')
        <input type="text" wire:model="search"
            class="bg-gray-800 text-sm rounded-full w-64 lg:w-80 px-4 pl-8 py-2 focus:outline-none focus:shadow-[0_0_2px_0_rgb(0,0,0,0.05)] focus:shadow-slate-100"
            placeholder="Pesquisar tv show" @focus="isOpen = true">
    @elseif ($type == 'actors')
        <input type="text" wire:model="search"
            class="bg-gray-800 text-sm rounded-full w-64 lg:w-80 px-4 pl-8 py-2 focus:outline-none focus:shadow-[0_0_2px_0_rgb(0,0,0,0.05)] focus:shadow-slate-100"
            placeholder="Pesquisar ator/atriz" @focus="isOpen = true">
    @endif
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-[9px] ml-2" viewBox="0 0 20 24">
            <path class="heroicon-ui"
                d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
        </svg>
    </div>

    <!-- <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div> -->

    @if (strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 text-sm rounded w-64 mt-4" x-show.transition.opacity="isOpen">
            @if ($type == 'movies')
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $result)
                            <li class="border-b border-gray-700">
                                <a href="/movies/{{ $result['id'] }}"
                                    class="hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                    @if ($loop->last) @keydown.tab="isOpen = false" @endif>
                                    @if ($result['poster_path'])
                                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                            alt="poster" class="w-8">
                                    @else
                                        <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                    @endif
                                    <span class="ml-4">{{ $result['title'] }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                @else
                    <div class="px-3 py-3">No results for "{{ $search }}"</div>
                @endif
            @elseif ($type == 'tvshows')
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $result)
                            <li class="border-b border-gray-700">
                                <a href="/tvshows/{{ $result['id'] }}"
                                    class="hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                    @if ($loop->last) @keydown.tab="isOpen = false" @endif>
                                    @if ($result['poster_path'])
                                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}"
                                            alt="poster" class="w-8">
                                    @else
                                        <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                    @endif
                                    <span class="ml-4">{{ $result['name'] }}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                @else
                    <div class="px-3 py-3">No results for "{{ $search }}"</div>
                @endif
            @elseif ($type == 'actors')
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $result)
                            <li class="border-b border-gray-700">
                                <a href="/actors/{{ $result['id'] }}"
                                    class="hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                                    @if ($loop->last) @keydown.tab="isOpen = false" @endif>
                                    @if ($result['profile_path'])
                                        <img src="https://image.tmdb.org/t/p/w92/{{ $result['profile_path'] }}"
                                            alt="poster" class="w-8">
                                    @else
                                        <img src="https://ui-avatars.com/api/?size=235&name={{ $result['name']}}"
                                            alt="poster" class="w-8">
                                    @endif
                                    <span class="ml-4">{{ $result['name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="px-3 py-3">No results for "{{ $search }}"</div>
                @endif
            @endif
        </div>
    @endif
</div>
