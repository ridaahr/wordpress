<?php get_header(); ?>
<main class="container bg-dark">
    <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-md-9 col-lg-8">
            
            <?php while (have_posts()) : the_post(); ?>

                <h1 class="text-warning mb-4">
                    <?php the_title(); ?>
                </h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4 text-center">
                        <?php the_post_thumbnail('square', array(
                            'class' => 'img-fluid rounded shadow-sm'
                        )); ?>
                    </div>
                <?php endif; ?>

                <div class="text-light">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>