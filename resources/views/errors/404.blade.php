@extends('layouts.main')
@section('title', 'CS52.RU | ЛУЧШИЕ ИГРОВЫЕ СЕРВЕРА CS 1.6')
@section('content')
    @include('shared.header')
    <section class="flex items-center min-h-screen justify-center bg-gray-50 dark:bg-gray-900">
        <div class="container flex flex-col items-center">
            <div class="flex flex-col gap-6 max-w-md text-center">
                <div>
                    <h2 class="font-extrabold text-9xl text-gray-600 dark:text-gray-100 animate-pulse">
                        <span class="sr-only">Error</span>404
                    </h2>
                    <p class="text-2xl md:text-3xl dark:text-gray-300">Страница не найдена</p>
                </div>
                <a href="{{route('home')}}"
                   class="px-8 py-4 text-xl font-semibold rounded bg-gray-900 dark:bg-white text-gray-50 dark:text-gray-500 hover:text-gray-200 hover:bg-gray-800 dark:hover:bg-gray-100">Вернуться
                    назад</a>
            </div>
        </div>
    </section>
@endsection
