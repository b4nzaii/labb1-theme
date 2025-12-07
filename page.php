<?php
get_header();
?>
<main>
<div class="container">
  <div class="row">

  <div class="col-xs-12 col-md-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>

    <?php endwhile; endif; ?>
  </div>

  <div class="col-xs-12 col-md-4">
    <?php get_sidebar(); ?>
  </div>
  </div>

</div>
</main>
