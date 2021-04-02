<?php

add_action('after_setup_theme', 'setup');
function setup() {
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form'));
  global $content_width;
  if ( ! isset( $content_width ) ) { $content_width = 1920; }
  register_nav_menus(array('main-menu' => esc_html__('Main Menu', 'blankslate')));
}

add_action( 'wp_enqueue_scripts', 'load_scripts');
function load_scripts() {
	wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}

add_action('wp_footer', 'add_scripts');
function add_scripts() {
?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?= get_template_directory_uri() . '/js/script.js' ?>"></script>
<?php
}

add_action('admin_menu', 'remove_links_tabs');
function remove_links_tabs() {
  remove_menu_page('edit-comments.php');
  remove_menu_page('users.php');
}
