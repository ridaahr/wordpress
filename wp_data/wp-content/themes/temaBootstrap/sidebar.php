<?php
/**
 * Sidebar principal
 */
?>

<aside class="col-lg-4 mt-4 mt-lg-0">

    <div class="p-4 bg-light rounded shadow-sm mb-4">
        <h4 class="h5 mb-3">Sidebar</h4>
        <p class="mb-0 small text-muted">Menú del sitio</p>
    </div>

    <div class="p-4 bg-white border rounded shadow-sm mb-4">

        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => 'nav flex-column',
        ));
        ?>

    </div>

</aside>