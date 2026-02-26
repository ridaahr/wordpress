<?php get_header() ?>
<p>Esto es de <strong>page.php</strong></p>
<?php
while (have_posts()): the_post();
?>
   <h1><?php the_title(); ?></h1>
   <?php the_content(); ?>
   <p><?php the_author(); ?></p>
   <p><?php the_time(); ?></p>
<?php endwhile; ?>
<?php get_footer() ?>