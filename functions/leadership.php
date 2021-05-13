<?php

/**
 * Register leader
 *
 * Register leadership figure post type
 */
function sagatown_post_type_leader() {
    $args = array(
        'labels' => array(
            'name' => 'Leaders',
            'singular_name' => 'Leader'
        ),
        'description' => 'Leadership figure at our company',
        'public' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('leader', $args);
}
add_action('init', 'sagatown_post_type_leader');
