<?php

// Add `Clients` Post Type
function add_clients() {
    $args = array(
        'labels' => array(
            'name' => 'Clients',
            'singular_name' => 'Client'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('clients', $args);
}


add_action('init', 'add_clients');

?>