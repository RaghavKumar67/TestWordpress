<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'test-theme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'test-theme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'test-theme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'test-theme' ),
		'archives' => __( 'Portfolio Archives', 'test-theme' ),
		'attributes' => __( 'Portfolio Attributes', 'test-theme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'test-theme' ),
		'all_items' => __( 'All Portfolios', 'test-theme' ),
		'add_new_item' => __( 'Add New Portfolio', 'test-theme' ),
		'add_new' => __( 'Add New', 'test-theme' ),
		'new_item' => __( 'New Portfolio', 'test-theme' ),
		'edit_item' => __( 'Edit Portfolio', 'test-theme' ),
		'update_item' => __( 'Update Portfolio', 'test-theme' ),
		'view_item' => __( 'View Portfolio', 'test-theme' ),
		'view_items' => __( 'View Portfolios', 'test-theme' ),
		'search_items' => __( 'Search Portfolio', 'test-theme' ),
		'not_found' => __( 'Not found', 'test-theme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'test-theme' ),
		'featured_image' => __( 'Featured Image', 'test-theme' ),
		'set_featured_image' => __( 'Set featured image', 'test-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'test-theme' ),
		'use_featured_image' => __( 'Use as featured image', 'test-theme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'test-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'test-theme' ),
		'items_list' => __( 'Portfolios list', 'test-theme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'test-theme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'test-theme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'test-theme' ),
		'description' => __( '', 'test-theme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-album',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );


function register_portfolio_category(){

		$args = array(
			'public'=> true,
			'label'=>'Portfolio type',
			'rewrite'=>false,
			'supports'=>array('title','author','editor','thumbnail','excerpt')

		);

		register_taxonomy('portfolio_type','portfolio',$args);
}

add_action( 'init', 'register_portfolio_category');
?>