<form class="header__search" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
    <label class="screen-reader-text" for="s">Поиск: </label>

    <input class="text-main-black md:text-lg text-sm bg-bg rounded-xl p-2 md:w-full" type="text"
        value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="поиск по товарам" />

    <button class="close-form pl-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <rect width="40" height="40" rx="20" fill="#303030" />
            <path d="M12 11L28.5 29" stroke="#F4F4F4" stroke-width="2" stroke-linecap="round" />
            <path d="M28.5 11L12 29" stroke="#F4F4F4" stroke-width="2" stroke-linecap="round" />
        </svg>
    </button>
</form>

<!-- <input class="text-main-black md:text-lg text-sm bg-bg rounded-xl p-2 md:w-full" name="" placeholder="Что вы ищите?"
    type="search">
<button class="text-white p-2 bg-pink rounded-xl relative md:pr-10 md:pl-10 px-5" type="submit">Найти</button>
<button class="close-form pl-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
        <rect width="40" height="40" rx="20" fill="#303030" />
        <path d="M12 11L28.5 29" stroke="#F4F4F4" stroke-width="2" stroke-linecap="round" />
        <path d="M28.5 11L12 29" stroke="#F4F4F4" stroke-width="2" stroke-linecap="round" />
    </svg>
</button> -->