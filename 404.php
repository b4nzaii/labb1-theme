<?php
get_header();
?>

<main>
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-8">
        <article>
          <h1>Sidan kunde inte hittas</h1>
          <p>Tyvärr, sidan du försökte nå finns inte längre eller har flyttats.</p>

          <p>
            <a href="<?php echo esc_url(home_url('/')); ?>">Tillbaka till startsidan</a>
            eller prova att söka:
          </p>

          <?php get_search_form(); ?>
        </article>
      </div>

      <div class="col-xs-12 col-md-4">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</main>

<?php
get_footer();
