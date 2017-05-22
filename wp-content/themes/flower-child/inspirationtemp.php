<?php
/*
  Template Name: inspirationtemp
*/
include 'error.php';
include 'high.php';
get_header();
//1
?>

  <h1><?php the_title(); ?></h1>
  <div class="box-1">
  </div>
  <div class="box-2">
  </div>
  <section class="gallery">
    <?php
      while (have_posts()) : the_post();
        if (get_post_gallery()) {
          get_post_gallery();
          the_content();
        }
    ?>
    <?php endwhile; ?>
  </section>







<?php get_footer(); ?>
