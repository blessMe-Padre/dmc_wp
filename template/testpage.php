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

        <!-- <?php show_current_user_id(); ?> -->
        <!-- <?php display_user_data_by_id(1); ?> -->


        <!-- 
        <form id="avatar-selection-form" action="<?php echo admin_url('admin-post.php'); ?>" method="post">
            <div class="avatar-option">
                <label for="avatar1">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-1.png" alt="Avatar 1">
                    <input type="radio" name="avatar" id="avatar1" value="avatar-1">
                </label>
            </div>
            <div class="avatar-option">
                <label for="avatar2">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/icons/avatar-2.png" alt="Avatar 2">
                    <input type="radio" name="avatar" id="avatar2" value="avatar-2">
                </label>
            </div>
            <button type="submit">Выбрать аватар</button>
        </form> -->
        <?php
        function update_basic_user_meta()
        {
            global $current_user;

            // Check if avatar is posted and update user meta accordingly
            if (!empty($_POST['avatar'])) {
                update_user_meta($current_user->ID, 'user_pic', sanitize_text_field($_POST['avatar']));
            }

            // Retrieve the current avatar value
            $user_pic = get_user_meta($current_user->ID, 'user_pic', true);
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

                <!-- Submit Button -->
                <button class="" type="submit">Сохранять</button>
            </form>
        <?php }

        update_basic_user_meta();
        ?>


    </div>
</main>


<?php get_footer(); ?>