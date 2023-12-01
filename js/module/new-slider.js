export const initNewSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.new-item');
        console.log(innerWidth)
        let swiper;
        if (item) {
            swiper = new Swiper(item, {
                loop: true,
                direction: 'horizontal',
                spaceBetween: 15,


                // If we need pagination
                navigation: {
                  nextEl: '.next-new--item',
                  prevEl: '.prev-new--item', 
                },
                slidesPerGroup: 4,
                breakpoints: {
                    320: {
                      slidesPerView: 2,
                      spaceBetween: 15,
                      grid: {
                        rows: 2,
                        cols: 2,
                      },
                    },
                    480: {
                      slidesPerView: 3,
                      spaceBetween: 15,
                    },

                    767: {
                      slidesPerView: 3,
                      spaceBetween: 15,
                    }
                  }
            });
        }
    };

    itemSlider();
}