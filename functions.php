<?php
    function dzialkiWarszawianka_enqueue_styles() {
        wp_enqueue_style('dzialkiWarszawianka-style', get_template_directory_uri() . '/style.css', array(), "all");
    }
    add_action('wp_enqueue_scripts', 'dzialkiWarszawianka_enqueue_styles');
?>