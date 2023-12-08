
export const initNavModal = () => {

    // модальные окна в header 

    const navModalBtns = document.querySelectorAll(".header-wrapper");
    const body = document.querySelector('body');

    navModalBtns.forEach((navModalBtn) => {
        const navModal = document.querySelector('.modal-wrapper');

        navModalBtn.addEventListener('click', (evt) => {
            evt.stopPropagation();
            const currentButton = evt.currentTarget;

            if (currentButton && navModal) {
                navModalBtn.classList.toggle('is-active');
            }
        });
    });

    body.addEventListener('click', (evt) => {

        navModalBtns.forEach((navModalBtn) => {
            navModalBtn.classList.remove('is-active');
        });
    });
} 