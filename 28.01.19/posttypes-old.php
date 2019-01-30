<?php 

/**
 * Plugin Name: Subhasish Nath's custom posttypes and taxonomies
 * Description: A plugin to add custom posttypes and Taxonomies
 * Version: 0.1
 * Author: Subhasish
 * License: GPL2
 */
/*
{Subhasish Nath's custom posttypes and taxonomies} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
 * 
 */
function my_custom_posttypes() {

// creating post type for blog page............................




$labels = array(
        'name'               => 'Quotes',
        'singular_name'      => 'Quote',
        'menu_name'          => 'Our Quotes',
        'name_admin_bar'     => 'Quote',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Quote',
        'new_item'           => 'New Quote',
        'edit_item'          => 'Edit Quote',
        'view_item'          => 'View Quote',
        'all_items'          => 'All Quotes',
        'search_items'       => 'Search Quotes',
        'parent_item_colon'  => 'Parent Quotes:',
        'not_found'          => 'No Quotes found.',
        'not_found_in_trash' => 'No Quotes found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-thumbs-up',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Quote' ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'show_in_rest'       => true,
        'rest_base'          => 'AllQuotes',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'thumbnail','excerpt' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('Quote',$args); 




$labels = array(
        'name'               => 'AllHomeSlides',
        'singular_name'      => 'HomeSlides',
        'menu_name'          => 'HomeSlides',
        'name_admin_bar'     => 'HomeSlides',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New HomeSlide',
        'new_item'           => 'New HomeSlide',
        'edit_item'          => 'Edit HomeSlide',
        'view_item'          => 'View HomeSlide',
        'all_items'          => 'All HomeSlides',
        'search_items'       => 'Search HomeSlides',
        'parent_item_colon'  => 'Parent HomeSlides:',
        'not_found'          => 'No HomeSlides found.',
        'not_found_in_trash' => 'No HomeSlides found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-images-alt2',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllHomeSlides' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'show_in_rest'       => true,
        'rest_base'          => 'AllHomeSlides',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('category')
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllHomeSlides',$args); 

$labels = array(
        'name'               => 'AllBlogs',
        'singular_name'      => 'Blogs',
        'menu_name'          => 'Blogs',
        'name_admin_bar'     => 'Blogs',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Blog',
        'new_item'           => 'New Blog',
        'edit_item'          => 'Edit Blog',
        'view_item'          => 'View Blog',
        'all_items'          => 'All Blogs',
        'search_items'       => 'Search Blogs',
        'parent_item_colon'  => 'Parent Blogs:',
        'not_found'          => 'No Blogs found.',
        'not_found_in_trash' => 'No Blogs found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-images-alt2',
        // 'menu_position' =>  7,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'AllBlogs' ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 5,
        'show_in_rest'       => true,
        'rest_base'          => 'AllBlogs',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'         => array('BlogTypes','category'),
        // ,'custom-fields','excerpt'
    );
    register_post_type('AllBlogs',$args);
    
}
add_action('init','my_custom_posttypes');

function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

/*-- Custom Taxonomies --*/

function my_custom_taxonomies(){


    $labels = array(
        'name' => 'BlogTypes',
        'singular_name' => 'BlogType',
        'search_items' => 'Search BlogType',
        'all_items' => 'All BlogTypes',
        'parent_item' => 'Parent Type All BlogTypes',
        'parent_item_colon' => 'Parent Type All BlogTypes:',
        'edit_item' => 'Edit Type of BlogType',
        'update_item' => 'Update Type of BlogType',
        'add_new_item' => 'Add New Type of BlogType',
        'new_item_name' => 'New Type of BlogType',
        'menu_name' => 'Type of BlogType', 
        );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'BlogTypes' ),
    );
    register_taxonomy( 'BlogTypes', array( 'AllBlogs' ), $args );


//     register_taxonomy( "portfolio-categories", 
//     array(  "portfolio" ), 
//     array(  "hierarchical" => true,
//             "labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"), 
//             "singular_label" => __( "Field" ), 
//             "rewrite" => array( 'slug' => 'genre', // This controls the base slug that will display before each term 
//                                 'with_front' => false)
//          ) 
// );
    
//     /*-- Type of Product or Service --*/
    
//     $labels = array(
//         'name'              => 'Type of Products/Services',
//         'singular_name'     => 'Type of Product/Service',
//         'search_items'      => 'Search Types of Products/Services',
//         'all_items'         => 'All Types of Products/Services',
//         'parent_item'       => 'Parent Type of Product/Service',
//         'parent_item_colon' => 'Parent Type of Product/Service:',
//         'edit_item'         => 'Edit Type of Product/Service',
//         'update_item'       => 'Update Type of Product/Service',
//         'add_new_item'      => 'Add New Type of Product/Service',
//         'new_item_name'     => 'New Type of Product/Service Name',
//         'menu_name'         => 'Type of Product/Service',
//     );

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array( 'slug' => 'product-types' ),
//     );
//     register_taxonomy( 'product-type', array( 'reviews' ), $args );
    
    
//     /*-- Price Range Taxonomy definition starts --*/
    
//     $labels = array(
//         'name'              => 'Price Ranges',
//         'singular_name'     => 'Price Range',
//         'search_items'      => 'Search Price Ranges',
//         'all_items'         => 'All Price Ranges',
//         'parent_item'       => 'Parent of Price Ranges',
//         'parent_item_colon' => 'Parent of Price Ranges:',
//         'edit_item'         => 'Edit Price Ranges',
//         'update_item'       => 'Update Price Ranges',
//         'add_new_item'      => 'Add New Price Ranges',
//         'new_item_name'     => 'New Price Ranges',
//         'menu_name'         => 'Price Ranges',
//     );

//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array( 'slug' => 'price-ranges' ),
//     );
//     register_taxonomy( 'price-range', array( 'reviews' ), $args );
    
    
//     register_taxonomy(
            
//             'mood',
//             'reviews',
//             array(
//                 'label' => 'Moods',
//                 'rewrite' => array('slug' => 'moods'),
//                 'hierarchical' => false,
                
//             )
            
//             );
    
}
add_action('init', 'my_custom_taxonomies',0);

?>