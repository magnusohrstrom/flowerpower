<?php
/*
  Template Name: contacttemp
*/

get_header();
?>
<main>
  <header class="title-header">
    <a id="header-1" href="http://localhost:8888/flowerpower/">Flower Power</a>
  </header>
<article class="article-content">
  <?php
// TO SHOW THE PAGE CONTENTS
  //while (have_posts()) : the_post();
     the_post();

     the_content();
  ?>

        <?php //the_content(); ?>

<?php //endwhile; ?>
</article>



</main>
