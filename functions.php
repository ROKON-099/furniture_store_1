<?php
function theme_enqueue_styles() {
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/assets/src/output.css',
        array(),
        filemtime(get_template_directory() . '/assets/src/output.css')
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
?>