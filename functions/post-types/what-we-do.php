<?php

// Add `What we do` Post Type
function add_what_we_do() {
    $args = array(
        'labels' => array(
            'name' => 'What we do',
            'singular_name' => 'What we do'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('what-we-do',$args);
}


add_action('init', 'add_what_we_do');

?>