@extends('layouts.main')
@section('title', 'CS-GEMERA.RU | Вход')
@section('content')
    @include('shared.header')
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
                        Войти в аккаунт
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
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
                        <div>
                            <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                Пароль
                            </label>
                            @error('password')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror

                            <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    placeholder="••••••••"
                                    class="{{@$errors->has('password') ? 'border-red-400 dark:border-red-400' : 'border-gray-500 dark:border-gray-500'}} focus:ring-primary-600 focus:border-primary-600 block w-full rounded-lg border bg-gray-50 p-2.5 text-gray-900 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                                    required=""
                            />
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <input type="checkbox" id="remember" name="remember"
                                       class="w-4 h-4 text-gray-600 bg-gray-100 border-gray-300 rounded focus:ring-gray-500 dark:focus:ring-gray-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-white dark:border-gray-600">
                                <label for="remember"
                                       class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-300">Запомнить
                                    меня</label>
                            </div>
                            <div>
                                <a href="{{route('password.request')}}"
                                   class="text-sm font-bold text-gray-900 dark:text-gray-300">Забыл пароль</a>
                            </div>
                        </div>
                        <button
                                type="submit"
                                class="text-grey-900 dark:bg-primary-600 dark:hover:bg-primary-700 w-full rounded rounded-lg border-2 border-gray-300 p-3 px-5 py-2.5 text-center text-sm font-medium hover:bg-gray-100 dark:text-white hover:dark:bg-gray-500"
                        >
                            Войти
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection