@extends('layout\main')

@section('title', 'HDC events')

@section('content')
<div>
    <div class="m-[20px] text-[26px] ml-[5%]">Busque um evento</div>
    <form action="" method="get" class="w-[100%] text-center mb-[20px]">
        <input type="text" class="py-2.5 px-[10px] w-[80%] md:w-[60%] text-sm text-gray-900 border-2 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600" name="city" placeholder="Procure um evento" />
    </form>
    <div>
        <h2>Próximos eventos</h2>
        <p>Veja os eventos os próximos dias</p>
        <div class="w-[100%] text-center">
            @foreach($events as $event)
            <a href='/event/edit/{{ $event->id }}'>
                <p>{{ $event->title }} -- {{ $event->description }}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endSection
