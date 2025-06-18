<?php
add_filter('jpeg_quality', function ($arg) {
    return 100;
});

add_filter('big_image_size_threshold', '__return_false');

/**
 * Add Support for ACF Options page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

/**
 * Register CPT
 */
add_action('init', function () {

    register_post_type('post_testimonials', [
        'labels' => [
            'name' => __('Testimonials'),
            'singular_name' =>  __('Testimonial'),
            'add_new' =>  __('Add new'),
            'add_new_item' =>  __('Add new Testimonial'),
            'edit' =>  __('Edit'),
            'edit_item' =>  __('Edit Testimonial'),
            'new_item' =>  __('New Testimonial'),
            'view' =>  __('View Testimonials'),
            'view_item' =>  __('View Testimonials'),
            'search_items' =>  __('Search Testimonials'),
            'not_found' =>  __('No Testimonials found'),
            'not_found_in_trash' =>  __('No Testimonials found in Trash'),
        ],
        'rewrite' => [
            'with_front' => false
        ],
        'description'   => '',
        'menu_position' => 12,
        'public'        => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'supports'      => ['title'],
        'has_archive'   => false,
        // 'rewrite' => array('slug' => 'faq', 'with_front' => false),
        'menu_icon'     => 'dashicons-testimonial',
        // 'taxonomies' => ['faq_category'],
    ]);
});
