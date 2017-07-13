<?php

// Add `Testimonials` Post Type
function add_testimonials() {
    $args = array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('testimonials',$args);
}


add_action('init', 'add_testimonials');

?>