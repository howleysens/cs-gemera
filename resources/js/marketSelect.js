const underlineSelect = document.getElementById('underline_select');
const rightDiv = document.querySelector('.right');
const price = document.querySelector('.price');

underlineSelect.addEventListener('change', () => {
    const selectedOptionValue = underlineSelect.value;
    const rightContent = rightDiv.innerHTML;

    if (selectedOptionValue === 'GRAB') {
        price.textContent = "100₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
            class="text-teal-600 dark:text-teal-200">граба</span></h1>
          <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
              Вы получаете:
          </span>
          <span class="mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
              * Доступ к грабу + меню граба
          </span>
          <img src="assets/market/grabMenuPlayer.png" alt="" class="sm:w-96 rounded border-[1px] border-gray-500">
        `;
    } else if (selectedOptionValue === 'HOOK') {
        price.textContent = "65₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
                                class="text-teal-600 dark:text-teal-200">паутинки</span></h1>
                        <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
                            Вы получаете:
                        </span>
                            <span class="mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
                            * Доступ к меню паутинки
                            </span>
                        <img src="assets/market/hookmenu.png" alt="" class="w-96 rounded border-[1px] border-gray-500">
        `;
    } else if (selectedOptionValue === 'PREM') {
        price.textContent = "200₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
            class="text-teal-600 dark:text-teal-200">премиума</span></h1>
          <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
              Вы получаете:
          </span>
          <span class="text-center sm:text-right mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
              * Доступ к меню премиума<br>
              * Префикс <span class="text-yellow-200">[</span><span class="text-green-400">Премиум</span><span class="text-yellow-200">]</span>
          </span>
          <img src="assets/market/premiumMenu.png" alt="" class="w-96 sm:w-96 rounded border-[1px] border-gray-500">
        `;
    } else if (selectedOptionValue === 'SVIP') {
        price.textContent = "150₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
            class="text-teal-600 dark:text-teal-200">супер випа</span></h1>
          <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
              Вы получаете:
          </span>
          <span class="text-center sm:text-right mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
              * Доступ к меню супер випа<br>
              * Префикс <span class="text-yellow-200">[</span><span class="text-green-400">Супер-Вип</span><span class="text-yellow-200">]</span>
          </span>
          <img src="assets/market/superVipMenu.png" alt="" class="w-96 rounded border-[1px] border-gray-500">
        `;
    } else if (selectedOptionValue === 'ADM') {
        price.textContent = "300₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
            class="text-teal-600 dark:text-teal-200">администратора</span></h1>
          <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
              Вы получаете:
          </span>
          <span class="text-center sm:text-right mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
              * Доступ к меню администратора<br>
              * Префикс <span class="text-yellow-200">[</span><span class="text-green-400">Админ</span><span class="text-yellow-200">]</span><br>
              * Доступ к предыдущим привилегиям<br>
              * Уникальные шапки
          </span>
          <img src="assets/market/adminMenu.png" alt="" class="w-96 rounded border-[1px] border-gray-500">
        `;
    } else if (selectedOptionValue === 'HLPR') {
        price.textContent = "400₽";
        rightDiv.innerHTML = `
          <h1 class="mb-5 font-bold text-gray-600 sm:text-xl dark:text-gray-100">Описание <span
            class="text-teal-600 dark:text-teal-200">хелпера</span></h1>
          <span class="font-light text-gray-500 sm:text-xl dark:text-gray-100">
              Вы получаете:
          </span>
          <span class="text-center sm:text-right mb-2 font-light text-gray-500 sm:text-xl dark:text-gray-100">
              * Доступ к меню хелпера<br>
              * Префикс <span class="text-yellow-200">[</span><span class="text-green-400">Админ</span><span class="text-yellow-200">]</span><br>
              * Доступ к предыдущим привилегиям<br>
              * Уникальный скин
          </span>
          <img src="assets/market/helperMenu.png" alt="" class="w-96 rounded border-[1px] border-gray-500">
        `;
    }
    else {
        // Restore previous content if not GRAB (optional)
        rightDiv.innerHTML = rightContent;
    }
});
