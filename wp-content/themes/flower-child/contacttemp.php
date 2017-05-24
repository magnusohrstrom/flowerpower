<?php
/*
  Template Name: contacttemp
*/
include 'error.php';
get_header();
?>
<main>
  <header class="title-header">
    <a id="header-1" href="http://localhost:8888/flowerpower/">Flower Power</a>
  </header>
  <h1><?php the_title(); ?></h1>
  <div class="box-1">
  </div>
  <div class="box-2">
  </div>
  <article class="article-content">
    <?php
  //TO SHOW THE PAGE CONTENT
       the_post();
       the_content();
        ?>

  </article>

<?php get_footer(); ?>

</main>
