export const initMainSlider = () => {
  const itemSlider = function () {
    const item = document.querySelector('.slider-item');
    let swiper;
    if (item) {
      swiper = new Swiper(item, {
        loop: true,
        autoplay: {
          delay: 3000,
        },
        speed: 1000,
        spaceBetween: 20,
        slidesPerView: 1,

        // If we need pagination
        // pagination: {
        //   el: '.swiper-pagination',
        //   clickable: true,
        // },
        breakpoints: {
          320: {
            slidesPerView: 1.2,
            spaceBetween: 15
          },
          480: {
            slidesPerView: 1.5,
            spaceBetween: 15
          },
          767: {
            slidesPerView: 2,
            spaceBetween: 15,
            centeredSlides: true,
          }
        }
      });
    }
  };

  itemSlider();
}