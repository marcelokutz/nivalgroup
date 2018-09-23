<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function total_child_enqueue_parent_theme_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'Total' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), $version );
	wp_enqueue_style( 'style-theme', '/wp-content/themes/nivalgroup/assets/dist/css/main.min.css', array(), $version );
	wp_enqueue_style( 'style-theme', '/wp-content/themes/nivalgroup/assets/dist/css/slick.min.css', array(), $version );
	wp_enqueue_style( 'style-theme', '/wp-content/themes/nivalgroup/assets/dist/css/slick-theme.min.css', array(), $version );

}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );
//svg images
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// function to find location within array
function relative_value_array($array, $current_val = '', $offset = 1) {
	$values = array_values($array);
	$current_val_index = array_search($current_val, $values);
	
	if( isset($values[$current_val_index + $offset]) ) {
	return $values[$current_val_index + $offset];
	}
	return false;
	};
	
	// previous page link function
	function dbdb_prev_page_link() {
	global $post;
	
	if ( isset($post->post_parent) && $post->post_parent > 0 ) {
	$children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);
	};
	
	// throw the children ids into an array
	foreach( $children as $child ) { $child_id_array[] = $child->ID; }
	
	$prev_page_id = relative_value_array($child_id_array, $post->ID, -1);
	
	$output = '';
	if( '' != $prev_page_id ) {
	$output .= '<a href="' . get_page_link($prev_page_id) . '"><span class="fa fa-angle-double-left" aria-hidden="true"></span> '. get_the_title($prev_page_id) . '</a>';
	}
	return $output;
	};
	
	//next page link function
	function dbdb_next_page_link() {
	global $post;
	
	if ( isset($post->post_parent) && $post->post_parent > 0 ) {
	$children = get_pages('&sort_column=post_date&sort_order=asc&child_of='.$post->post_parent.'&parent='.$post->post_parent);
	};
	
	// throw the children ids into an array
	foreach( $children as $child ) { $child_id_array[] = $child->ID; }
	
	$next_page_id = relative_value_array($child_id_array, $post->ID, 1);
	
	$output = '';
	if( '' != $next_page_id ) {
	$output .= '<a href="' . get_page_link($next_page_id) . '">'. get_the_title($next_page_id) . ' <span class="fa fa-angle-double-right" aria-hidden="true"></span></a>';
	}
	return $output;
	};