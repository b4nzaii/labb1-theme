<?php
/*
Template Name: Undersida 2
*/
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <!-- Sidomeny till vänster -->
      <div class="col-xs-12 col-md-4">
        <aside>
          <h2>Undersidor</h2>
          <ul class="side-menu">
            <?php
            wp_list_pages([
              'title_li' => '',
              'exclude'  => get_option('page_on_front') . ',' . get_option('page_for_posts')
            ]);
            ?>
          </ul>
        </aside>
      </div>
      <div class="col-xs-12 col-md-8">
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
