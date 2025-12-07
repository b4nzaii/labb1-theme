<?php
/**
 * Template Name: Undersida - Sidebar Left
 */
get_header();
?>

<div class="container">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-xs-12 col-md-4">
            <?php get_sidebar(); ?>
        </div>

        <div class="col-xs-12 col-md-8">
            <article>
                <h1><?php the_title(); ?></h1>
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </article>
        </div>

    </div>
</div>

<?php get_footer(); ?>
