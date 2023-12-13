import { initEventSlider } from "./module/event-slider.js";
import { initMainSlider } from "./module/main-slider.js";
import { initMenu } from "./module/menu.js";
import { initNewSlider } from "./module/new-slider.js";
import { initStickyHeader } from "./module/sticky-header.js";
import { initTabs } from "./module/tabs.js";
import { initLoadMore, initLoadMore2 } from "./module/loadMore.js";
import { initGeneralSlider2, initGeneralSlider3, initGeneralSlider4, initGeneralSlider5, initGeneralSlider6, initGeneralSlider7 } from "./module/general-slider.js";
import { initGeneralSlider1 } from "./module/general-slider.js";
import { initNavModal } from './module/nav-modal.js'
import { initAccordionMenu } from "./module/accordion-menu.js";
import { initEventItemSlider } from "./module/event-item-slider.js";
import { initPopup } from "./module/popup.js";
import { initProductAccordions } from "./module/product-accordion.js";
import { initCheckBox } from "./module/checkbox.js";


window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    initMenu();
    initNewSlider();
    initMainSlider();
    initStickyHeader();
    initTabs();
    initLoadMore();
    initLoadMore2();
    initGeneralSlider1();
    initGeneralSlider2();
    initGeneralSlider7();
    initGeneralSlider3();
    initGeneralSlider4();
    initGeneralSlider5();
    initGeneralSlider6();
    initNavModal();
    initAccordionMenu();
    initEventSlider();
    initEventItemSlider();
    initPopup();
    initProductAccordions();
    initCheckBox();
    baguetteBox.run('.gallery-wrapper');
});
