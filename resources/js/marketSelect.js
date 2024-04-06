const privilegeSelect = document.getElementById('countries'); // Получить элемент первого выпадающего списка
const descriptionBlock = document.querySelector('.flex.flex-col.items-center'); // Получить элемент второго блока

privilegeSelect.addEventListener('change', function() {
    const selectedValue = this.value; // Получить выбранное значение из выпадающего списка
    const descriptionText = document.querySelector('.tracking-wide'); // Получить элемент текста в описании

    if (selectedValue === 'US') {
        descriptionText.textContent = 'VIP';
    } else if (selectedValue === 'CA') {
        descriptionText.textContent = 'ADMIN';
    } else if (selectedValue === 'FR') {
        descriptionText.textContent = 'TEST';
    } else if (selectedValue === 'DE') {
        descriptionText.textContent = 'BOMJ';
    }
});
