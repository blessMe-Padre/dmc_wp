<footer class="footer page-section-3 md:pt-32 pt-10 mt-auto">
    <div class="container">
        <div class="flex gap-5 md:justify-between justify-evenly md:flex-nowrap flex-wrap">
            <div class="mb-0 md:block flex gap-5 justify-center md:flex-nowrap flex-wrap">
                <div class="flex items-start justify-start md:ml-0 -ml-20">
                    <div class="flex">
                        <a href="#"><img loading="lazy"
                                src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg" width="137"
                                height="42" alt="лого"></a>
                        <h2 class="md:text-2xl sm:text-base font-extrabold text-main-black p-2">
                            DMC <span class="text-pink">SHOP</span><br> AND <span class="text-green">CAFE</span>
                        </h2>
                    </div>
                </div>
                <div class="text-main-black mt-5 transition hover:text-green mb-10 md:mr-0 mr-6">
                    <p class="text-sm">ИП Тарасова Мария Викторовна</p>
                    <p class="text-sm">ИНН 250690230559</p>
                    <p class="text-sm">ОГРНИП 321253600050956</p>
                    <p class="text-sm">г. Владивосток, ул. Светланская, д. 109. DMC Cafe</p>
                    <p class="text-sm">+79089713982</p>
                    <p class="text-sm">dmc_shop@mail.ru</p>
                </div>
            </div>


            <nav class="nav">
                <?php wp_nav_menu([
                    'theme_location' => 'bottom',
                    'container' => 'ul',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </nav>

            <nav class="nav">
                <?php wp_nav_menu([
                    'theme_location' => 'bottom-right',
                    'container' => 'ul',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </nav>

            <div class="flex flex-row md:flex-col justify-between md:gap-0 gap-12">
                <a class="header-call-button block w-full mx-3" href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/socials/Vector.svg"
                        class="bg-pink p-2 rounded-lg shadow-md shadow-main-black mb-4" />
                </a>
                <ul>
                    <li><a class="text-sm text-main-black mb-5 block transition hover:text-green font-semibold"
                            href="tel:+78005553535">
                            +7 (999) 999-99-99</a></li>
                    <li><a class="text-sm text-main-black mb-5 block transition hover:text-green font-semibold"
                            href="tel:+78005553535">
                            +7 (999) 999-99-99</a></li>
                    <li><a class="text-sm text-main-black mb-5 block transition hover:text-green font-semibold"
                            href="mailto:info@urgent-cleaner.com">dmc_shop@mail.ru</a></li>
                    <li>
                        <a href="https://yandex.ru/maps/org/dms_k_pop/20433094477/?ll=131.908135%2C43.115424&z=14.66">
                            <p class="text-sm text-green mb-4 decoration-green">Посмотреть на карте</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/baguettebox.js"></script>

<script type="module" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>
</body>

</html>