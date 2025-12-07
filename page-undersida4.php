<?php
/*
Template Name: Undersida 4
*/
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

      <!-- Bild till höger -->
      <div class="col-xs-12 col-md-4">
        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('large');
        } else {
          echo '<img src="' . esc_url(get_template_directory_uri() . '/img/paris.jpg') . '" alt="Resmål">';
        }
        ?>
      </div>

    </div>
  </div>
</main>

<?php
get_footer();
