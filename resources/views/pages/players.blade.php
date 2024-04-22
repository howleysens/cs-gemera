@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | Список игроков')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800 pb-20">
        <div class="container flex flex-col items-center px-5">
            <img src="{{ asset('sticker/3.webp') }}" alt="" class="w-32 opacity-[80%]">
            <p class="mb-5 font-light text-center text-gray-500 sm:text-xl dark:text-gray-400">
                Здесь вы можете посмотреть статистику игроков нашего сервера.<br>И даже найти себя!
            </p>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="players-table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Никнейм
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Уровень
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Баланс
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Общий онлайн
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($playersList as $player)
                        <tr class="bg-white hover:bg-gray-100 hover:dark:bg-gray-700 border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$player->id}}
                            </th>
                            <td class="px-6 py-4 dark:text-red-200">
                                {{$player->nickname}}
                            </td>
                            <td class="px-6 py-4">
                                {{$player->level}}
                            </td>
                            <td class="px-6 py-4">
                                {{$player->money}} $
                            </td>
                            <td class="px-6 py-4">
                                {{ceil($player->all_play_time / 60)}} H.
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">
                {{$playersList->links()}}
            </div>
        </div>
    </section>
@endsection
