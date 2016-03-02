<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php wp_title( '|' , true, 'right'); bloginfo( 'name' ); ?></title>
  <meta name="description" content="Luke Fiji - Front end web developer &amp; graphic designer">
  <meta name="author" content="Luke Fiji">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- <link rel="icon" type="image/png" href="img/favicon.png" />*/  -->

  <?php wp_head(); ?>

</head>

<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="header">
    <!-- Header/Navbar -->
    <div class="container">
      <div class="logo"><a class='logo' href="<?php bloginfo('url') ?>">Luke Fiji</a></div>
      <div class="navbar">
        <?php

          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
          );

          wp_nav_menu ($defaults);

        ?>
      </div>
    </div>
  </div>
