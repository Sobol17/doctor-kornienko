<?php
function my_theme_enqueue_assets() {
    // Стили
    wp_enqueue_style('my-theme-reset-style', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/css/style.css');

    // Скрипты
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/js/script.js', [], false, true); // true = подключить внизу перед </body>
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' => 'Настройки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug'  => 'site-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}
