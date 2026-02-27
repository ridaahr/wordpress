

<?php 
/*
* Template name: Sin sidebar
*/

get_header(); ?>

<main class="container my-5">
    <div class="row">

        <!-- CONTENIDO -->
        <div class="col-lg-8">

            <?php while (have_posts()) : the_post(); ?>

                <!-- TÍTULO -->
                <h1 class="text-primary mb-4">
                    <?php the_title(); ?>
                </h1>

                <!-- IMAGEN DESTACADA -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4 text-center">
                        <?php the_post_thumbnail('square', array(
                            'class' => 'img-fluid rounded shadow-sm'
                        )); ?>
                    </div>
                <?php endif; ?>

                <!-- CONTENIDO -->
                <div class="mb-5 px-3 px-md-0"
                     style="line-height:1.7; font-size:1.05rem;">
                    <?php the_content(); ?>
                </div>

                <!-- INFO AUTOR -->
                <div class="text-muted small border-top pt-3 mb-5">
                    <p class="mb-1">
                        <strong>Escrito por:</strong>
                        <?php the_author(); ?>
                    </p>

                    <p class="mb-0">
                        <strong>Fecha:</strong>
                        <?php echo get_the_date(); ?>
                    </p>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>