<?php
/*
Template Name: Страница events - шаблон 
*/
get_header();
?>
<main>
    <section>
        <div class="container pt-20">

            <div class="breadcrumb">
                <ul class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>
                        </a>
                    </li>
                    <li class="opacity-60"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                        </svg>
                    </li>
                    <li class="breadcrumb__item">
                        <span class="opacity-60">Мероприятия</span>
                    </li>
                </ul>
            </div>

            <div class="flex">
                <h2 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative z-0">Мероприятия</h2>
            </div>

            <ul class="pt-10 event-list">
                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category' => 7,
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    )
                );

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <li class="relative md:pr-6">
                        <img class="rounded-lg w-[440px] relative" src="<?= get_field("обложка_мероприятия"); ?>" />

                        <h3 class=" pt-2 text-base lg:text-2xl font-bold ">
                            <?php the_title(); ?>
                        </h3>
                        <div class=" flex items-center justify-between gap-3">
                            <p class="text-sm lg:text-xl pr-3">Ждем в гости
                                <?= get_field("дата_проведения"); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>"
                                class="absolute bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                <img class=""
                                    src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-corner.svg"
                                    alt="вправо" />
                            </a>
                        </div>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>


            <!-- <div class="flex md:items-center md:justify-end justify-center gap-2 pt-10">
                <button class="prev-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                    <img src="./src/img/icons/arrow-left.svg" alt="влево" />
                </button>

                <div class="bg-main-black py-2 px-5 rounded-lg">
                    <p class="text-white"> 1/6 </p>
                </div>

                <button class="next-new--item-1 bg-pink rounded-lg shadow-md shadow-main-black -z-0 px-3 py-2">
                    <img src="./src/img/icons/arrow-rigth.svg" alt="вправо" />
                </button>
            </div> -->

        </div>
    </section>
</main>

<?php get_footer(); ?>