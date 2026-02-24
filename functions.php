<?php
declare(strict_types=1);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  ]);
});

/**
 * Enqueue styles
 */
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'original-theme',
    get_theme_file_uri('/dist/style.css'),
    [],
    filemtime(get_theme_file_path('/dist/style.css'))
  );
});