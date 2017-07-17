<?php

// Add `Footer` Post Type
function add_footer() {
    $args = array(
        'labels' => array(
            'name' => 'Footer',
            'singular_name' => 'Footer'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('footer',$args);
}


add_action('init', 'add_footer');

?>