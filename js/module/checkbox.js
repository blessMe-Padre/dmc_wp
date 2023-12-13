export const initCheckBox = () => {
    console.log('fdfdfdfdfdfdf');
    // Сначала получаем все чекбоксы внутри элементов с классом 'wpfLiLabel'
    const checkboxes = document.querySelectorAll('.tag-wrapper .wpfLiLabel .wpfCheckbox input[type="checkbox"]');

    // Функция для обновления класса 'is-active'
    function updateActiveClass() {
        // Проверяем, установлен ли флажок
        if (this.checked) {
            // Если да, добавляем класс 'is-active' к родительскому элементу 'wpfLiLabel'
            this.closest('.wpfLiLabel').classList.add('is-active');
        } else {
            // Если нет, удаляем класс 'is-active'
            this.closest('.wpfLiLabel').classList.remove('is-active');
        }
    }

    // Добавляем обработчик событий к каждому чекбоксу
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', updateActiveClass);

        // Начальное обновление классов при загрузке страницы
        if (checkbox.checked) {
            checkbox.closest('.wpfLiLabel').classList.add('is-active');
        }
    });

}