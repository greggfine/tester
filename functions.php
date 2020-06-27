<?php
    function pulsetester_scripts(){
        wp_enqueue_style('fontawesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"');
        wp_enqueue_style('pulsetester-style', get_stylesheet_uri(), NULL);
        wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
        wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
        wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'pulsetester_scripts');
?>
