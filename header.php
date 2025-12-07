<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> <!---->
</head>
<body <?php body_class(); ?>>

<div id="wrap>
 <header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1 class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
            </div>
            <!-- Sökformulär -->
          <div class="search-bar">
          <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="text" name="s" placeholder="Sök..." value="<?php the_search_query(); ?>">
          <button type="submit">🔍</button>
         </form>
        </div>
      </div>
    </div>
</header>

<nav id="nav">
    <div class="container">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'menu',
        ]);
        ?>
    </div>
</nav>

<!-- Mobilsök (visas endast i mobil, CSS styr) -->
<div class="mobile-search">
    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
        <label for="mobilesearch">Sök:</label>
        <input type="text" name="s" id="mobilesearch" placeholder="Sök...">
        <input type="submit" value="Sök">
    </form>
</div>
