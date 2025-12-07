<?php
/*
Template Name: Kontakt
*/
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <!-- Kontakt-kortet -->
      <div class="col-xs-12 col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <section class="contact-section">
            <header class="contact-header">
              <p>
                Har du en fråga, ett förslag eller vill bara säga hej?
                Fyll i formuläret nedan så återkommer vi så snart vi kan.
              </p>
            </header>

            <div class="contact-form-wrap">
              <?php
              // Contact Form 7 – behåll din shortcode/id
              echo do_shortcode('[contact-form-7 id="108bff8" title="Contact form 1"]');
              ?>
            </div>
          </section>

        <?php endwhile; endif; ?>
      </div>

      <!-- Sidebar till höger som tidigare -->
      <div class="col-xs-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
