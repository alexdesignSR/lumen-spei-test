<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package LumenSpei
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function LumenSpei_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'LumenSpei_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function LumenSpei_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'LumenSpei_pingback_header' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>);
			height: 30px;
			width: 151px;
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
        }
 
		.login #nav a {
			color: #FF6931 !important;
		}

		.login #nav {
			text-align: center;
		}

		.login #backtoblog {
			display: none;
		}

		body.login #loginform .button-secondary {
			color: #FF6931;
		}

		body.login #loginform {
			background-color: transparent;
			border: 2px solid #FF6931;
		}

		body.login #loginform label {
			color: #FF6931;
		}

		body.login #loginform input {
			color: #fff;
			border: 1px solid #fff;
			border-radius: 0;
			background-color: transparent;
			font-size: 16px;
		}

		body.login {
			background-color: #222222;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function digwp_disable_gutenberg($is_enabled, $post_type) {
	
	if ($post_type === 'post') return false;
	
	return $is_enabled;
	
}
add_filter('use_block_editor_for_post_type', 'digwp_disable_gutenberg', 10, 2);


// Numbered Pagination
if ( ! function_exists( 'LumenSpei_post_navigation' ) ) :
	/**
	 * Lf Post Navigation
	 */
	function LumenSpei_post_navigation() {
		?>
		<div class="nav-links">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'prev_text'          => __('<i class="icon-angle-left" aria-hidden="true"></i>'),
				'next_text'          => __('<i class="icon-angle-right" aria-hidden="true"></i>')
		) );
		?>
	</div>
	<?php 
	}
endif;

function filter_block_categories_when_post_provided( $block_categories, $editor_context ) {

    if ( ! empty( $editor_context->post ) ) {

        array_push(
            $block_categories,
            array(
                'slug'  => 'lumenspei-blocks',
                'title' => __( 'Lumen Spei Blocks', 'custom-plugin' ),
                'icon'  => null,
            )
        );
        
    }

    return $block_categories;
}

add_filter( 'block_categories_all', 'filter_block_categories_when_post_provided', 10, 2 );

?>