<?php

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

// Custom featured image
add_image_size( 'blog-thumb', 63, 63, true );
set_post_thumbnail_size( 796, 258, true );

// Register Menu
register_nav_menus( array(
	'primary' => __( 'Primary Navigation'),
	'footer' => __( 'Footer Navigation'),
) );

// Add styles and scripts to the header/footer
function learn_scripts() {
		wp_enqueue_style( 'Google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600,800');
		wp_enqueue_style( 'Normalizer', get_template_directory_uri() . '/normalize.css' );
		wp_enqueue_style( 'Main', get_stylesheet_uri(), array(), '1.3', false );
		wp_enqueue_style( 'Fresco', get_template_directory_uri() . '/fresco.css' );
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.1.0', true );
		wp_enqueue_script( 'fresco-js', get_template_directory_uri() . '/js/fresco.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'youtube-iframeapi', 'http://www.youtube.com/iframe_api', array(), '1.0.0', true );
}


add_action( 'wp_enqueue_scripts', 'learn_scripts');

// Content width for embedded content
if ( ! isset( $content_width ) ) {
	$content_width = 796;
}

// Sidebar Widget Register
function learn_init() {

	register_sidebar( array(
		'name' => 'Right Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="cf single-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' => 'Home Sidebar',
		'id' => 'home',
		'before_widget' => '<div class="cf single-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'learn_init' );


// Add some nice formatting for the page titles
function learn_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

	return $title;
}

add_filter( 'wp_title', 'learn_wp_title', 10, 2 );


// Head Cleanup
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

?>