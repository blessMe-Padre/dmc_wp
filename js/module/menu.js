export const initMenu = () => {
    const body = document.querySelector('body');
    // Меню
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuButton = document.querySelector('.btn-close-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-menu a');
    let overlay = document.createElement('div');
    overlay.classList.add('overlay');

    if (mobileMenu) {

        menuButton.addEventListener('click', e => {
            menuButton.classList.toggle('active');
            mobileMenu.classList.toggle('is-active');
            document.body.classList.toggle("is-dark");

            if (mobileMenu.classList.contains('is-active')) {
                body.appendChild(overlay);

                overlay.addEventListener('click', () => {
                    menuButton.classList.remove('active');
                    mobileMenu.classList.remove('is-active');
                    body.removeChild(overlay);
                });
            } else {
                body.removeChild(overlay);
            }
        });

        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', evt => {
                evt.preventDefault()
                menuButton.classList.remove('active');
                mobileMenu.classList.remove('is-active');
                body.removeChild(overlay);
            });
        });
    }
}