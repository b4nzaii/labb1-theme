<?php
get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </article>

                    <?php endwhile; else : ?>

                        <article>
                            <h1>Välkommen!</h1>
                            <p>Skapa en sida och välj den som startsida under Inställningar → Läsning.</p>
                        </article>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
