@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | Вход')
@section('content')
    @include('shared.header')
    @session('status')
    <div class="flex min-h-screen items-center justify-center bg-gray-100">
        <div class="rounded-lg bg-gray-50 px-16 py-14">
            <div class="flex justify-center">
                <div class="rounded-full bg-green-200 p-6">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-500 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="h-8 w-8 text-white animate-pulse">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                    </div>
                </div>
            </div>
            <h3 class="my-4 text-center text-3xl font-semibold text-gray-700">Успешно</h3>
            <p class="w-[230px] text-center font-normal text-gray-600">Отправили на указанную почту ссылку для сброса
                пароля</p>
        </div>
    </div>
    @endsession
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto flex min-h-screen flex-col items-center justify-center px-6 py-8 lg:py-0">
            <a
                    href="{{ route('home') }}"
                    class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white"
            >
                <img class="mr-2 h-8 w-8" src="{{ asset('assets/logo.png') }}" alt="logo"/>
                CS-GEMERA
            </a>
            <div
                    class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
                <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
                    <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl"
                    >
                        Забыли пароль?
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('password.request') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Ваш Email
                            </label>
                            @error('email')
                            <p class="text-xs text-red-500">
                                {{ $message }}
                            </p>
                            @enderror

                            <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="{{@$errors->has('email') ? 'border-red-500 dark:border-red-500' : 'border-gray-400 dark:border-gray-400'}} focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border bg-gray-50 p-2.5 text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                                    placeholder="email@gmail.com"
                                    required=""
                                    value="{{ old('email') }}"
                            />
                        </div>
                        <button
                                type="submit"
                                class="text-grey-900 dark:bg-primary-600 dark:hover:bg-primary-700 w-full rounded rounded-lg border-2 border-gray-300 p-3 px-5 py-2.5 text-center text-sm font-medium hover:bg-gray-100 dark:text-white hover:dark:bg-gray-500"
                        >
                            Восстановить пароль
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
