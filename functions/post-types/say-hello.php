<?php

// Add `Say Hello` Post Type
function add_say_hello() {
    $args = array(
        'labels' => array(
            'name' => 'Say Hello',
            'singular_name' => 'Say Hello'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('say-hello',$args);
}


add_action('init', 'add_say_hello');

?>