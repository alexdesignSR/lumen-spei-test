<?php

function testimonial_cpt() {
    $singular = 'Testimonial'; // Book
	$plural = 'Testimonials';  // Books
	
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
        'has_archive'         => false,
        'publicly_queryable'  => false,
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => 'dashicons-testimonial',
        'supports'            => array( 'title' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'testimonial_cpt' );