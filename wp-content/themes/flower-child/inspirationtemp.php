<?php
/*
  Template Name: inspirationtemp
*/
include 'error.php';
include 'high.php';
get_header();

?>

  <h1><?php the_title(); ?></h1>
  <div class="box-1">
  </div>
  <div class="box-2">
  </div>
  <div class="box-3">
  </div>
  <div class="box-4">
  </div>

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

<h2>Recent Posts</h2>
<ul>
<?php

	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
	wp_reset_query();
?>

</ul>




<?php get_footer();
//7 ?>
