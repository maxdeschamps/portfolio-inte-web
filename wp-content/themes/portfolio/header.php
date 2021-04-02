<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="theme-color" content="#1abc9c" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav id="menu" class="desktop">
      <div class="container">
        <?php wp_nav_menu(); ?>
      </div>
    </nav>

    <div id="container">
