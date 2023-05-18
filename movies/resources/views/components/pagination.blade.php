<div>
    @if ($page == 1)
        <div class="flex text-gray-400 pt-[10px] pb-[40px] items-center">
            <div class="bg-slate-700 mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page }}
            </div>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 1 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 2 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 3 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 3 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 4 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 4 }}
            </a>
            <span class="mr-[10px] text-[16px] items-center px-2 py-2">...</span>
            <a href="/{{ $link }}/page={{ $totalPages }}"
                class="mr-[5px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $totalPages }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="rounded-full items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    @elseif ($page == 2)
        <div class="flex text-gray-400 pt-[10px] pb-[40px] items-center">
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="rounded-full mr-[5px] items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 18" fill="currentColor">
                    <path
                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page - 1 }}
            </a>
            <div class="bg-slate-700 mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 ">
                {{ $page }}
            </div>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 1 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 2 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 3 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 3 }}
            </a>
            <span class="mr-[10px] text-[16px] items-center px-2 py-2">...</span>
            <a href="/{{ $link }}/page={{ $totalPages }}"
                class="mr-[5px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $totalPages }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="rounded-full items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    @elseif ($page == 3)
        <div class="flex text-gray-400 pt-[10px] pb-[40px] items-center">
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="rounded-full mr-[5px] items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 18" fill="currentColor">
                    <path
                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="/{{ $link }}/page={{ $page - 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page - 2 }}
            </a>
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page - 1 }}
            </a>
            <div class="bg-slate-700 mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300">
                {{ $page }}
            </div>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 1 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 2 }}
            </a>
            <span class="mr-[10px] text-[16px] items-center px-2 py-2">...</span>
            <a href="/{{ $link }}/page={{ $totalPages }}"
                class="mr-[5px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $totalPages }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="rounded-full items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    @elseif ($page > 3)
        <div class="flex text-gray-400 pt-[10px] pb-[40px] items-center">
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="rounded-full mr-[5px] items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 18" fill="currentColor">
                    <path
                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="/{{ $link }}/page=1"
                class="mr-[5px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                1
            </a>
            <span class="mr-[10px] text-[16px] items-center px-2 py-2">...</span>
            <a href="/{{ $link }}/page={{ $page - 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page - 2 }}
            </a>
            <a href="/{{ $link }}/page={{ $page - 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page - 1 }}
            </a>
            <div class="bg-slate-700 mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300">
                {{ $page }}
            </div>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 1 }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 2 }}"
                class="mr-[10px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $page + 2 }}
            </a>
            <span class="mr-[10px] text-[16px] items-center px-2 py-2">...</span>
            <a href="/{{ $link }}/page={{ $totalPages }}"
                class="mr-[5px] rounded-full px-4 py-2 ring-1 ring-gray-300 hover:bg-slate-800">
                {{ $totalPages }}
            </a>
            <a href="/{{ $link }}/page={{ $page + 1 }}"
                class="rounded-full items-center p-2 hover:bg-slate-800">
                <svg class="h-[35px]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    @endif
</div>
