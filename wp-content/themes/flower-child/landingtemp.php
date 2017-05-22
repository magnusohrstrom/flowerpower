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


  <!--<figure class="hero-figure">
    <span><h1></h1></span>
    <img src="http://localhost:8888/flowerpower/wp-content/uploads/2017/05/couple.jpg" alt="">
    <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
  </figure>
  <figure class="hero-figure">
    <span><h1>We are not over tulips</h1></span>
    <img src="http://localhost:8888/flowerpower/wp-content/uploads/2017/05/tulips.jpg" alt="">
    <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
  </figure>
  <figure class="hero-figure">
    <span><h1>We are not over tulips</h1></span>
    <img src="http://localhost:8888/flowerpower/wp-content/uploads/2017/05/boq.jpg" alt="">
    <span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></span>
  </figure>-->
</div>

<?php get_footer(); ?>
