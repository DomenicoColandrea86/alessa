<?php

// Add `Team Member` Post Type
function add_team_member() {
    $args = array(
        'labels' => array(
            'name' => 'Team Members',
            'singular_name' => 'Team Member'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'has_archive' => true
    );
    register_post_type('team-member',$args);
}


add_action('init', 'add_team_member');

?>