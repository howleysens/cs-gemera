@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | ЛУЧШИЕ ИГРОВЫЕ СЕРВЕРА CS 1.6')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800 pb-20">
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
                Покупка привилегии
            </h1>
            <div
                class="bg-gray-50 dark:bg-gray-600 rounded border-[1px] border-gray-500 dark:border-gray-500 py-2 px-2 md:py-4 md:px-8 w-4/5">
                <div
                    class="flex justify-start flex-wrap flex-col gap-12 items-center sm:items-start sm:flex-nowrap sm:flex-row">
                    <div class="left w-1/2">
                        <div class="wrapper">
                            <span
                                class="font-bold text-gray-600 sm:text-xl dark:text-gray-100">Выберите услугу</span>
                            <form class="max-w-sm" action="{{route('market.store')}}" method="POST">
                                @csrf
                                <label for="underline_select" class="sr-only">Underline select</label>
                                <select name="privilegy" id="underline_select"
                                        class="block py-2.5 pl-2 px-0 w-full text-sm text-gray-900 dark:bg-gray-700 bg-transparent border-0 border-2 rounded mt-5 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option value="HOOK" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">
                                        Паутинка (месяц)
                                    </option>
                                    <option value="GRAB" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">
                                        Граб (месяц)
                                    </option>
                                    <option value="SVIP" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">Супер
                                        ВИП (месяц)
                                    </option>
                                    <option value="PREM" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">
                                        Премиум (месяц)
                                    </option>
                                    <option value="ADM" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">Админ (месяц)
                                    </option>
                                    <option value="HLPR" class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">
                                        Хелпер (месяц)
                                    </option>
                                </select>
                                <div class="mt-4">
                                    <label for="text" class="font-bold text-gray-600 sm:text-xl dark:text-gray-100">Никнейм</label>
                                    <input type="text" name="nickname"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Никнейм" required/>
                                </div>
                                <div class="mt-4 flex flex-col">
                                    <label for="text" class="font-bold text-gray-600 sm:text-xl dark:text-gray-100">SteamID</label>
                                    <a href="https://steamid.io/"
                                       class="font-thin text-red-500 dark:text-red-300 text-[0.7rem] dark:text-gray-100">*Как
                                        узнать SteamID?*</a>
                                    <input type="text" name="steamid"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="SteamID" required/>
                                </div>
                                <div class="mt-4">
                                    <label for="text" class="font-bold text-gray-600 sm:text-xl dark:text-gray-100">Пароль</label>
                                    <input type="text" name="password"
                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                           placeholder="Пароль" required/>
                                </div>
                                <div class="my-4">
                                <span
                                    class="font-bold text-gray-600 sm:text-xl dark:text-gray-100">Тип привязки</span>
                                    <select name="privilegy_link" id="underline_select"
                                            class="block py-2.5 pl-2 px-0 w-full text-sm text-gray-900 dark:bg-gray-700 bg-transparent border-0 border-2 rounded border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                        <option value="link_nickname" class="bg-gray-200 dark:text-gray-900">
                                            Никнейм + пароль
                                        </option>
                                        <option value="link_steamid"
                                                class="bg-gray-200 dark:bg-gray-200 dark:text-gray-900">SteamID
                                        </option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                <button type="submit"
                                        class="text-white bg-gray-600 dark:bg-gray-400 hover:bg-pink-500 transition-all hover:dark:bg-pink-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                                    <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="currentColor" viewBox="0 0 18 21">
                                        <path
                                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                    </svg>
                                    Купить
                                </button>
                                    <span class="price font-bold text-gray-600 sm:text-[2rem] dark:text-gray-100 tracking-widest">65₽</span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right flex flex-col items-center sm:items-end w-full sm:w-1/2 h-full">
                        <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
                                class="text-teal-600 dark:text-teal-200">паутинки</span></h1>
                        <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
                            Вы получаете:
                        </span>
                        <span class="mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
                            * Доступ к меню паутинки
                            </span>
                        <img src="{{asset('assets/market/hookmenu.png')}}" alt=""
                             class="w-96 rounded border-[1px] border-gray-500">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
