<?php
/**
 * Template Name: Undersida - Full Bredd
 */
get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
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
