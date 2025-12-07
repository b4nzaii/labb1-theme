<?php
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-8">
        <h1><?php single_cat_title(); ?></h1>

        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <article>
              <h2 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <ul class="meta">
                <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                <li><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></li>
                <li><i class="fa fa-folder-open"></i><?php the_category(", "); ?></li>
              </ul>

              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Läs mer</a>
            </article>

          <?php endwhile; ?>

          <div class="pagination">
            <?php the_posts_pagination(); ?>
          </div>

        <?php else : ?>
          <p>Inga inlägg i denna kategori.</p>
        <?php endif; ?>
      </div>

      <div class="col-xs-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</main>

<?php
get_footer();
