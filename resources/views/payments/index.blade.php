@extends('layouts.main')
@section('title', 'CS52.RU | Пополнить баланс')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800 pb-20">
        <div class="container flex flex-col items-center px-5">
            <img src="{{ asset('sticker/5.webp') }}" alt="" class="w-32 opacity-[80%]">
            <div class="mx-auto max-w-screen-md text-center mb-4 lg:mb-8 border-b-[1px]">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Пополнение
                    баланса</h2>
            </div>
            <form method="POST" action="{{route('payment.create')}}">
                @csrf
                <label for="amount" class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
                    Сумма пополнения
                </label>
                <input type="number" name="amount"
                       class="bg-gray-50 border my-3 w-56 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="100" required/>
                <button type="submit"
                        class="text-white bg-gray-900 dark:bg-gray-600 hover:bg-pink-500 transition-all hover:dark:bg-pink-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2">
                    <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                         fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                    </svg>
                    Пополнить
                </button>
            </form>
        </div>
    </section>

@endsection
