<?php
get_header();
?>

<main>
    <div class="container">
        <div class="row">
            <!-- Inläggslista -->
            <div class="col-xs-12 col-md-8">

                <h1>Blogg</h1>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article>
                        <!-- Titel -->
                        <h2 class="title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <!-- Meta-data -->
                        <ul class="meta">
                            <li><i class="fa fa-user"></i> <?php the_author(); ?></li>
                            <li><i class="fa fa-clock-o"></i> <?php the_time('Y-m-d'); ?></li>
                        </ul>

                        <!-- Utvald bild -->
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>

                        <!-- Utdrag -->
                        <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>

                        <a href="<?php the_permalink(); ?>">Läs mer</a>
                    </article>

                <?php endwhile; endif; ?>

                <!-- Paginering -->
                <div class="pagination">
                    <?php
                    echo paginate_links([
                        'prev_text' => '« Föregående',
                        'next_text' => 'Nästa »',
                    ]);
                    ?>
                </div>

            </div>

            <!-- Sidebar (kommer senare) -->
            <div class="col-xs-12 col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
