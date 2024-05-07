@extends('layouts.main')
@section('title', 'CS52.RU | ЛУЧШИЕ ИГРОВЫЕ СЕРВЕРА CS 1.6')
@section('content')
    @include('shared.header')
    <section class="bg-center bg-no-repeat dark:bg-gray-700 bg-gray-50 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl items-center justify-center flex flex-col text-center py-24 lg:py-36">
            <img src="{{ asset('sticker/1.webp') }}" alt="" class="w-32 opacity-[80%]">
            <h1
                class="mb-4 text-2xl md:text-text-4xl font-extrabold tracking-tight leading-none text-gray-800 dark:text-gray-300 md:text-5xl lg:text-6xl">
                Познакомимся?</h1>
            <p class="mb-8 text-sm md:text-md font-normal text-gray-800 dark:text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Мы - молодой, развивающийся проект игровых серверов Counter Strike 1.6<br>
                Мы ценим наших игроков и стараемся сделать геймплей разнообразным и интересным.
            </p>
            <div class="flex flex-wrap items-center justify-center ">
                <a href="{{route('rules')}}">
                    <button type="button"
                            class="text-gray-100 bg-gray-400 hover:bg-gray-400/90 dark:text-white gap-2 dark:bg-gray-500 dark:hover:bg-gray-500/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        <svg class="w-5 h-5 text-gray-100 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                             viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        Правила
                    </button>
                </a>
                <a href="https://discord.com/invite/UMVAKMNrwd">
                    <button type="button"
                            class="text-white gap-2 bg-[#3b5998] hover:bg-[#3b5998]/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        <svg class="w-5 h-5 text-gray-800 text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                        </svg>
                        Discord
                    </button>
                </a>
                <a href="{{route('market.index')}}">
                    <button type="button"
                            class="text-gray-100 bg-gray-400 hover:bg-gray-400/90 dark:text-white gap-2 dark:bg-gray-500 dark:hover:bg-gray-500/90 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                        <svg class="w-5 h-5 text-gray-100 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                        </svg>
                        Магазин
                    </button>
                </a>
            </div>
        </div>
    </section>
    <div class="p-4 dark:bg-gray-800">
        <div
            class="flex flex-col items-center justify-center tracking-wide text-[0.5rem] sm:text-[0.6rem] md:text-sm xl:text-2xl text-gray-800 dark:text-gray-300">
            <h1>
                Статистика игроков
            </h1>
            <h6 class="leading-none text-[0.5rem]">
                *Обновляется каждые 30 минут
            </h6>
        </div>
        <div
            class="mt-2 min-h-screen rounded-lg border-2 border-dashed border-gray-200 p-4 dark:border-gray-700 dark:bg-gray-800">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="flex items-center justify-center h-56 rounded bg-gray-50 dark:bg-gray-700">
                    <div class="flex flex-col items-center justify-center">
                        <p class="text-2xl text-gray-800 text-center dark:text-gray-300">
                            {{$getServerStats['HostName']}}
                        </p>
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            {{$getServerStats['Players']}} / {{$getServerStats['MaxPlayers']}}
                        </p>
                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            {{$getServerStats['Map']}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex h-40 flex-col items-center justify-center rounded bg-gray-50 dark:bg-gray-700">
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M7 11c.889-.086 1.416-.543 2.156-1.057a22.323 22.323 0 0 0 3.958-5.084 1.6 1.6 0 0 1 .582-.628 1.549 1.549 0 0 1 1.466-.087c.205.095.388.233.537.406a1.64 1.64 0 0 1 .384 1.279l-1.388 4.114M7 11H4v6.5A1.5 1.5 0 0 0 5.5 19v0A1.5 1.5 0 0 0 7 17.5V11Zm6.5-1h4.915c.286 0 .372.014.626.15.254.135.472.332.637.572a1.874 1.874 0 0 1 .215 1.673l-2.098 6.4C17.538 19.52 17.368 20 16.12 20c-2.303 0-4.79-.943-6.67-1.475"/>
                    </svg>
                    <p
                        class="tracking-wide text-[0.5rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-800 dark:text-gray-300">
                        Начальник месяца
                    </p>
                    @foreach ($bestChief as $chief)
                        <div>
                            <span
                                class="font-bold tracking-wide text-[0.4rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-800 linear-wipe">
                                {{ $chief->nickname }}
                            </span>
                            <span
                                class="font-bold tracking-wide text-[0.4rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-800 dark:text-gray-300">
                                ({{ $chief->was_chief }})
                            </span>
                        </div>
                    @endforeach
                </div>
                <div class="flex h-40 flex-col items-center justify-center rounded bg-gray-50 dark:bg-gray-700">
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                              d="M8 7V6a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1M3 18v-7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                    </svg>
                    <p
                        class="tracking-wide text-[0.5rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-800 dark:text-gray-300">
                        Самые богатые игроки
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-2 gap-x-4">
                        @foreach ($richestPlayers as $player)
                            <span
                                class="font-bold tracking-wide text-[0.4rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-800 dark:text-gray-300 linear-wipe">
                                ・{{ $player->nickname }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div
                class="mb-4 flex gap-2 py-12 flex-col items-center justify-start pt-3 rounded bg-gray-50 dark:bg-gray-700">
                <p class="text-2xl text-gray-800 text-center dark:text-gray-300">
                    Лучшие семьи сервера
                </p>
                @if($bestFamilies->isEmpty())
                    <span
                        class="mt-6 font-bold tracking-wide text-[0.4rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-gray-700 dark:text-gray-200">
                            На сервере еще нет семей
                        </span>
                @else
                    @foreach ($bestFamilies as $family)
                        <a href="#"
                           class="font-bold tracking-wide text-[0.4rem] sm:text-[0.6rem] text-center md:text-sm xl:text-2xl text-green-400 dark:text-green-400">
                            {{ $family->ClanName }}
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="mb-4 grid gap-4">
                <a href="{{route('players.index')}}">
                    <div
                        class="flex h-40 flex-col items-center justify-center rounded bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 hover:dark:bg-gray-600">
                        <p
                            class="tracking-wide text-[0.8rem] sm:text-[0.9rem] text-center md:text-xl xl:text-3xl text-gray-800 dark:text-gray-300">
                            Статистика игроков
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
