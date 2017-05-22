<?php
/*
  Template Name: landingtemp
*/


/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy

 */
include 'high.php';
include 'error.php';
get_header();

?>
<div class="wrapper">


  <?php the_post();
    the_content();


  ?>
  <div class="box-1">
  </div>
  <div class="box-2">
  </div>

</div>

<?php get_footer(); ?>
