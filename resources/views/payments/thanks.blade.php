@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | Успешно')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800 pb-20">
        <div class="container flex flex-col items-center px-5">
            <img src="{{ asset('sticker/5.webp') }}" alt="" class="w-32 opacity-[80%]">
            <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-8 border-b-[1px]">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Платеж прошел</h2>
            </div>
            <span class="mb-4 text-2xl tracking-tight font-extrabold text-gray-800 dark:text-white text-center">Благодарим Вас за покупку.<br>Все вырученные средства идут на развитие проекта.</span>
        </div>
    </section>

@endsection
