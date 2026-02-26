<h1>Page con id</h1>
<?php
while (have_posts()): the_post();
?>
   <h1><?php the_title(); ?></h1>
   <?php if (has_post_thumbnail()):
      the_post_thumbnail('squere', array('class' => 'imagen-destacada'));
   endif;
   ?>
<?php endwhile; ?>