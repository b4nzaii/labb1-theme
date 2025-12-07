<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row">

            <!-- Main content -->
            <div class="col-xs-12 col-md-8">

                <h1>
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        echo "Inlägg av: " . get_the_author();
                    } elseif (is_date()) {
                        echo get_the_archive_title();
                    } else {
                        echo "Arkiv";
                    }
                    ?>
                </h1>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php endif; ?>

                            <h2 class="title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <ul class="meta">
                                <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                                <li><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></li>
                                <li><i class="fa fa-folder-open"></i> <?php the_category(', '); ?></li>
                            </ul>

                            <p><?php the_excerpt(); ?></p>

                            <a href="<?php the_permalink(); ?>">Läs mer</a>
                        </article>

                    <?php endwhile; ?>

                    <div class="pagination">
                        <?php the_posts_pagination(); ?>
                    </div>

                <?php else : ?>
                    <p>Inga inlägg hittades.</p>
                <?php endif; ?>

            </div>

            <!-- Sidebar -->
            <div class="col-xs-12 col-md-4">
                <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</main>

<?php
get_footer();
