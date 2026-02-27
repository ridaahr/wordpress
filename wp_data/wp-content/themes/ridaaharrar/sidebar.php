<div class="col-lg-4 col-md-3">
    <div class="text-warning bg-black border border-warning rounded mb-4">
        <p>MENÚ</p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'nav flex-column',
        ));
        ?>
    </div>

</div>