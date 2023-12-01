export const initEventItemSlider = () => {
    
    const itemSlider = function () {
        const item = document.querySelector('.event-item__slider');
        console.log(item)
        let swiper;
        if (item) {
            swiper = new Swiper(item, {
                loop: true,
                direction: 'horizontal',
                spaceBetween: 30,
                slidesPerView: 1,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination--event',
                    clickable: true,
                },
            });
        }
    };

    itemSlider();
}