@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | ЛУЧШИЕ ИГРОВЫЕ СЕРВЕРА CS 1.6')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800">
        <div class="container flex flex-col items-center px-5">
            <img src="{{ asset('sticker/2.webp') }}" alt="" class="w-32 opacity-[80%]">
            <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-8 border-b-[1px]">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Магазин
                    сервера</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Совершая покупки вы поддерживаете
                    наш проект.<br>
                    Все средства идут на обновления, раскрутку и конкурсы для Вас!
                </p>
            </div>
            <h1 class="text-center mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Пополнение баланса
            </h1>
            <div
                class="bg-gray-50 dark:bg-gray-600 rounded border-[1px] border-gray-500 dark:border-gray-500 py-2 px-8 md:py-4 md:px-8">
                <div class="mb-4 flex flex-col items-center">
                    <h5 class="text-center mb-2 text-xl leading-none font-bold text-gray-900 dark:text-white">Как узнать
                        ID своего аккаунта?</h5>
                    <span class="text-red-500">Нажмите M-7-1.
                        <span class="dark:text-white text-gray-700">
                            Там вы увидите ID аккаунта.
                        </span>
                    </span>
                    <img src="{{asset('assets/market/account_id.png')}}" alt="" class="w-56">
                </div>
                <form>
                    <div class="grid gap-6 mb-6 ">
                        <div>
                            <label for="game_account_id"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                ID аккаунта
                            </label>
                            <input type="text" id="game_account_id"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="ID игрового аккаунта" required/>
                        </div>
                        <div>
                            <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Сумма пополнения
                            </label>
                            <input type="text" id="amount"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="Укажите сумму пополнения" required/>
                        </div>
                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Пополнить
                        </button>
                </form>
            </div>
        </div>
    </section>
@endsection
