<?php

// Add `Social Media` Post Type
function add_social_media() {
    $args = array(
        'labels' => array(
            'name' => 'Social Media',
            'singular_name' => 'Social Media'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('social-media',$args);
}


add_action('init', 'add_social_media');

?>