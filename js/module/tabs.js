export const initTabs = () => {
    //Tabs
    const tabButtons = document.querySelectorAll("._tabs-item");
    const tabs_blocks = document.querySelectorAll("._tabs-block");


    function sayHi() {
        const couponLink = document.querySelector('.wc-block-components-totals-coupon-link');
        couponLink.addEventListener('click', () => {
            const label = document.querySelector('.wc-block-components-totals-coupon__input-0');
            console.log(label);
            console.log(label.innerText);
        });
    }

    setTimeout(sayHi, 3000);


    tabButtons.forEach(button => {
        button.addEventListener('click', (evt) => {
            evt.preventDefault();
            const targetBtn = evt.currentTarget;
            const targetBtnId = targetBtn.getAttribute('data-tab');
            const currentTab = document.querySelector(targetBtnId);

            if (!targetBtn.classList.contains('_active')) {
                tabButtons.forEach(button => {
                    button.classList.remove('_active');
                    button.classList.remove('is-active');
                });

                tabs_blocks.forEach(button => {
                    button.classList.remove('_active');
                });

                targetBtn.classList.add('_active');


                targetBtn.classList.add('is-active');
                currentTab.classList.add('_active');


            }
        });
    });
}