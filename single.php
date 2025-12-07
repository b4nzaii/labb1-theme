<?php
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article <?php post_class(); ?>>
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail("large"); ?>
            <?php endif; ?>
            <h1 class="title"><?php the_title(); ?></h1>
            <ul>
              <li><i class="fa fa-user"></i><?php the_author_posts_link(); ?></li>
              <li><i class="fa fa-clock"></i><?php echo get_the_date(); ?></li>
              <li><i class="fa fa-folder-open"></i><?php the_category(", "); ?></li>
            </ul>

            <div class="content">
              <?php the_content(); ?>
            </div>

        </article>

  <nav class="post-navigation">
            <div class="row">
              <div class="col-xs-6">
                <?php previous_post_link('%link', '« Föregående inlägg'); ?>
              </div>
              <div class="col-xs-6 text-right">
                <?php next_post_link('%link', 'Nästa inlägg »'); ?>
              </div>
            </div>
          </nav>

        <?php endwhile; endif; ?>

      </div>

      <!-- Sidokolumn -->
      <div class="col-xs-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</main>

<?php
get_footer();
