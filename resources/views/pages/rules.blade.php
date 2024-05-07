@extends('layouts.main')
@section('title', 'CS52.RU | Правила сервера')
@section('content')
    @include('shared.header')
    <section class="flex min-h-screen justify-center bg-gray-50 dark:bg-gray-800 pb-20">
        <div class="container flex flex-col items-center px-5">
            <img src="{{ asset('sticker/4.webp') }}" alt="" class="w-32 opacity-[80%]">
            <p class="mb-5 font-light text-center text-gray-500 sm:text-xl dark:text-gray-400">
                На данной странице вы можете ознакомиться с правилами сервера.<br>
                Незнание правил — не освобождает от ответственности.
            </p>

            <div class="w-full" id="accordion-nested-parent" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3 text-gray-500 dark:text-gray-400"
                            data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                            aria-controls="accordion-collapse-body-1">
                        <span class="sm:text-xl text-xs">Общие правила сервера</span>
                        <svg data-accordion-icon="" class="w-3 h-3 shrink-0 rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
                        <div id="accordion-nested-collapse" data-accordion="collapse">
                            <h2 id="accordion-nested-collapse-heading-1">
                                <button type="button"
                                        class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                        data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false"
                                        aria-controls="accordion-nested-collapse-body-1">
                                    <span>Правила для всех игроков</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-1" class="hidden"
                                 aria-labelledby="accordion-nested-collapse-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.1</span>
                                        <span>Запрещена реклама/обсуждение/упоминание другого проекта.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>бан от 1 до 4 часов</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.2</span>
                                        <span>Запрещен мониторинг (выдача местоположения) игрока, если вы мертвы.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>бан от 1 до 4 часов</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.3</span>
                                        <span>Запрещен розжиг конфликта/дискриминация по половому/рассовому/возрастному признаку.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>бан от 2 до 24 часов</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.4</span>
                                        <span>Запрещено прямое или завуалированное упоминание родных.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>бан от 6 часов до 7 дней</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.5</span>
                                        <span>Запрещен спам, бред в голосовой/текстовый чат.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>мут от 5 до 15 минут | кик</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.6</span>
                                        <span>Запрещен любой софт, дающий преимущество одного игрока над другим.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>бан навсегда</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.8</span>
                                        <span>Запрещено ставить неадекватный никнейм (мат, похожий на чей-либо (playerpromax -> Playerpr0maX), прямые оскорбления)</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>принудительная смена никнейма | кик | бан от 1 до 30 минут</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.7</span>
                                        <span>Запрещено использовать баги, недоработки (сборки, карты, плагины)</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>откат аккаунта | бан от 1 до 2 часов</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">1.7</span>
                                        <span>Запрещено использовать Soundpad без необходимости (искл. игра, просьба охранника/начальника/администрации).</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>мут 5 минут | кик</span>
                                    </div>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-2">
                                <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                        data-accordion-target="#accordion-nested-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-nested-collapse-body-2">
                                    <span>Правила глобальных игр</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-2" class="hidden"
                                 aria-labelledby="accordion-nested-collapse-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">2.1</span>
                                        <span>Запрещено объединяться в команды в любой игре, где должен остаться один заключенный.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>KILL</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">2.2</span>
                                        <span>Запрещено писать kill в консоль.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>кик</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">2.3</span>
                                        <span>Запрещен surf (если он есть на карте).</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>KILL</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">2.4</span>
                                        <span>Запрещены все нычки.</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>KILL</span>
                                    </div>
                                    <div
                                        class="border-gray-500 dark:border-gray-200 border-l border-dashed pl-2 text-gray-800 font-thin tracking-wide dark:text-gray-200 mb-2">
                                        <span class="text-red-500 font-extrabold">2.5</span>
                                        <span>Запрещены все батуты, на которых есть надпись "Запрещено во время глоб. игр".</span><br>
                                        <span class="text-red-400">Наказание:</span>
                                        <span>KILL</span>
                                    </div>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-3">
                                <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                                        data-accordion-target="#accordion-nested-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-nested-collapse-body-3">
                                    <span>Can I use both?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-3" class="hidden"
                                 aria-labelledby="accordion-nested-collapse-heading-3">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">We actually recommend using both
                                        Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                                        stopping you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these
                                        technologies:</p>
                                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                        <li><a href="https://flowbite.com/pro/"
                                               class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a>
                                        </li>
                                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                               class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                            aria-controls="accordion-collapse-body-2">
                        <span class="sm:text-xl text-xs">правила 2</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using the Figma software so everything you see in the library has a design equivalent in our
                            Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                                                                                     class="text-blue-600 dark:text-blue-500 hover:underline">Figma
                                design system</a> based on the utility classes from Tailwind CSS and components from
                            Flowbite.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
