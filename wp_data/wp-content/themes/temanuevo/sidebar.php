<aside class="col-md-4">

    <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">Sidebar</h4>
        <p>Este es mi sidebar de WordPress.</p>
    </div>

    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php endif; ?>

</aside>