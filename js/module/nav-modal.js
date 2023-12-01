
  export const initNavModal = () => {

    //accordions
    const navModalBtns = document.querySelectorAll(".header-wrapper");
    const navModal = document.querySelectorAll('.modal-wrapper')

    navModalBtns.forEach((navModalBtn) => {

        navModalBtn.addEventListener('click', (evt) => {
            evt.preventDefault();
            const currentButton = evt.currentTarget;
            console.log(currentButton)

            if (currentButton && navModal) {
                navModalBtn.classList.toggle('block')
                navModalBtn.classList.toggle('opacity-1')
            } else {
            }

        });
    });
} 