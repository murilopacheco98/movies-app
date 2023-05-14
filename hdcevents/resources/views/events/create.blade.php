@extends('layout\main')

@section('title', 'HDC events')

@section('content')
<div class="w-[100%] h-[600px] flex flex-col text-center items-center justify-center">
    <h1 class="mb-[10px] text-[22px]">Crie o seu evento</h1>
    <form action="/event" method="POST" class="w-[400px]">
        @csrf
        <div class="text-start mb-[10px]">
            <label for="title">Evento:</label>
            <input type="text" class="py-2.5 px-[10px] w-full text-sm text-gray-900 border-2 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600" name="title" placeholder="Nome do evento" />
        </div>
        <div class="text-start mb-[10px]">
            <label for="city">Cidade:</label>
            <input type="text" class="py-2.5 px-[10px] w-full text-sm text-gray-900 border-2 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600" name="city" placeholder="Local do evento" />
        </div>
        <div class="text-start mb-[10px]">
            <label for="private">O evento é privado?</label>
            <select name="private" class="py-2.5 px-[10px] w-full text-sm text-gray-900 border-2 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="text-start mb-[20px]">
            <label for="description">Descrição:</label>
            <input type="text" class="py-2.5 px-[10px] w-full text-sm text-gray-900 border-2 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600" name="description" placeholder="Descrição do evento" />
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Criar Evento
        </button>
    </form>
</div>
@endSection
