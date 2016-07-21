<?php

/*
 * Config
 * -------------------------------------------------------------------------- */

// Load functions in '/config'
require_once('config/loader.php');

// Admin bar resets- Remove top admin bar by default
// add_action('init', 'remove_admin_bar');
// add_action('init', 'remove_admin_bar_links');

// // Post type resets- Disable Posts/Comments
// // add_action('init', 'globally_disable_posts');
// add_action('init', 'globally_disable_comments');

// // Admin dashboard resets
// add_action('init', 'remove_dashboard_widgets');

// // Admin menu customization
// add_action('init', 'admin_menu_order');

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading... </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// function wpdocs_custom_excerpt_length( $length ) {
//     return 50;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>
