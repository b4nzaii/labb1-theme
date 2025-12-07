<?php get_header(); ?>

<main>
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- HERO -->
            <section class="hero-section">
                <div class="hero-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>

                <div class="hero-content">
                    <h1><?php the_title(); ?></h1>
                    <p><?php echo get_the_excerpt(); ?></p>

                    <?php
                    // Hämta senaste inlägg
                    $latest_post = get_posts(['numberposts' => 1]);
                    if ($latest_post) :
                        $latest_url = get_permalink($latest_post[0]->ID);
                    ?>
                        <a href="<?php echo $latest_url; ?>" class="hero-button">
                            Läs senaste inlägget
                        </a>
                    <?php endif; ?>
                </div>
            </section>

            <!-- SIDANS CONTENT -->
            <div class="welcome-text">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>


        <!--  SENASTE INLÄGG  -->
        <h2 class="section-title">Senaste inläggen</h2>

        <div class="post-grid">

            <?php
            $posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 3
            ]);

            if ($posts->have_posts()) :
                while ($posts->have_posts()) :
                    $posts->the_post();
            ?>

                <article class="post-card">
                    <a href="<?php the_permalink(); ?>">
                        <div class="card-image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php endif; ?>
                        </div>

                        <div class="card-content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 18); ?></p>
                        </div>
                    </a>
                </article>

            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>

    </div>
</main>

<?php get_footer(); ?>
