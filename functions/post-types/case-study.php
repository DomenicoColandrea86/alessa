<?php

// Add `Case Study` Post Type
function add_case_study() {
    $args = array(
        'labels' => array(
            'name' => 'Case Study',
            'singular_name' => 'Case Studies'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('case-study',$args);
}


add_action('init', 'add_case_study');

?>