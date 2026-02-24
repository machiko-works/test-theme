<?php
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'original-theme',
    get_theme_file_uri('/dist/style.css'),
    [],
    filemtime(get_theme_file_path('/dist/style.css'))
  );
});