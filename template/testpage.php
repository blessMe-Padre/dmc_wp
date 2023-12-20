<?php
/*
Template Name: тестовая страница - шаблон
*/
?>
<?php get_header(); ?>

<main class="inner-page-main mt-40">
    <div class="container">
        <h1>
            <?php the_title(); ?>
        </h1>

        <?php
        // Убедитесь, что вы внутри цикла WordPress или установите $user_id для конкретного пользователя
        $user_id = get_current_user_id(); // Получаем ID текущего пользователя
        
        // Получаем все метаданные пользователя
        $user_meta = get_user_meta($user_id);

        // Форматируем вывод
        
        if (isset($user_meta['avatar'])) {
            echo '<pre>';
            print_r($user_meta['avatar']);
            echo '</pre>';
        } else {
            echo 'Аватар не найден';
        }
        ?>


        <?php show_user_avatar_image(); ?>

        <?php
        function update_basic_user_meta()
        {
            global $current_user;

            // Check if avatar is posted and update user meta accordingly
            if (!empty($_POST['avatar'])) {
                // Create an array with the avatar data
                $avatar_array = array($_POST['avatar']);
                update_user_meta($current_user->ID, 'avatar', $avatar_array);
            }

            // Retrieve the current avatar value
            $user_pic_array = get_user_meta($current_user->ID, 'avatar', true);
            $user_pic = isset($user_pic_array[0]) ? $user_pic_array[0] : '';
            ?>
            <form action="" method="POST" class="">
                <!-- Avatar Selection Options -->
                <div class="avatar-option">
                    <label for="avatar1">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-1.png" alt="Avatar 1">
                        <input type="radio" name="avatar" id="avatar1" value="avatar-1" <?php echo ($user_pic == 'avatar-1') ? 'checked' : ''; ?>>
                    </label>
                </div>
                <div class="avatar-option">
                    <label for="avatar2">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-2.png" alt="Avatar 2">
                        <input type="radio" name="avatar" id="avatar2" value="avatar-2" <?php echo ($user_pic == 'avatar-2') ? 'checked' : ''; ?>>
                    </label>
                </div>
                <div class="avatar-option">
                    <label for="avatar3">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-3.png" alt="Avatar 3">
                        <input type="radio" name="avatar" id="avatar3" value="avatar-3" <?php echo ($user_pic == 'avatar-3') ? 'checked' : ''; ?>>
                    </label>
                </div>
                <div class="avatar-option">
                    <label for="avatar4">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-4.png" alt="Avatar 4">
                        <input type="radio" name="avatar" id="avatar4" value="avatar-4" <?php echo ($user_pic == 'avatar-4') ? 'checked' : ''; ?>>
                    </label>
                </div>

                <!-- Submit Button -->
                <button class="" type="submit">Сохранить</button>
            </form>
        <?php }


        update_basic_user_meta();
        ?>

    </div>
</main>


<?php get_footer(); ?>