<?php
function mycustomtheme_enqueue_assets() {
    // Main theme stylesheet
    wp_enqueue_style('mycustomtheme-style', get_stylesheet_uri());

    // Tabs stylesheet
    wp_enqueue_style(
        'tabs-style', // handle
        get_template_directory_uri() . '/css/tabs.css' // correct path
    );

    // jQuery (WordPress built-in)
    wp_enqueue_script('jquery');

    // Main JS
    wp_enqueue_script(
        'mycustomtheme-js',
        get_template_directory_uri() . '/js/main.js',
        array('jquery'), // jQuery as dependency
        '1.0',
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_assets');
