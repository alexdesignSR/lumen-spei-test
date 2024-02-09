<?php

function portfolio_cpt() {
    $singular = 'Portfolio'; // Book
	$plural = 'Portfolio';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name' 			      => __( $plural, 'LumenSpei' ),
        'singular_name' 	  => __( $singular, 'LumenSpei' ),
        'add_new' 		      => _x( 'Add New', 'LumenSpei', 'LumenSpei' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'LumenSpei' ),
        'edit'		          => __( 'Edit', 'LumenSpei' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'LumenSpei' ),
        'new_item'	          => __( 'New ' . $singular, 'LumenSpei' ),
        'view' 			      => __( 'View ' . $singular, 'LumenSpei' ),
        'view_item' 		  => __( 'View ' . $singular, 'LumenSpei' ),
        'search_term'   	  => __( 'Search ' . $plural, 'LumenSpei' ),
        'parent' 		      => __( 'Parent ' . $singular, 'LumenSpei' ),
        'not_found'           => __( 'No ' . $plural .' found', 'LumenSpei' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'LumenSpei' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-portfolio',
        'supports'            => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'portfolio_cpt' );


function portfolio_taxonomy() {
    $singular = 'Portfolio Category'; // Book category
	$plural = 'Portfolio Categories'; // Book categories
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
	);
	
    register_taxonomy( $slug, 'portfolio', $args );
}
add_action( 'init', 'portfolio_taxonomy', 0 );