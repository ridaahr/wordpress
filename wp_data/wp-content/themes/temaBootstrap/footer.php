<footer class="py-3 my-4 bg-light">
    <div class="container">

        <?php
        if (has_nav_menu('main-menu')) :
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'nav justify-content-center border-bottom pb-3 mb-3',
                'fallback_cb' => false,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
        endif;
        ?>

        <p class="text-center text-body-secondary">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </p>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>