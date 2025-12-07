<?php
/*
Template Name: Undersida 3
*/
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <div class="col-xs-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>

        <?php endwhile; endif; ?>
      </div>

    </div>
  </div>
</main>

<?php
get_footer();
