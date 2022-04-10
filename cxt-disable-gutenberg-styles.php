<?php
/*
Plugin Name:    Context Disable Gutenberg Styles
Description:    Don't use WP Gutenberg global styles, SVG and block library CSS bloat.
Text-Domain:    cwp-disable-gutenberg-styles
Version:        1.1
Author:         Robert Andrews
Author URI:     http://www.robertandrews.co.uk
License:        GPL v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
*/

/*
1.
Remove global styles
Contributed by @vijayhardaha
https://github.com/WordPress/gutenberg/issues/36834#issuecomment-1028603741
*/
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );

/*
2.
Remove global styles SVG filters.
Code contributed by @Mamaduka
https://github.com/WordPress/gutenberg/issues/38299#issuecomment-1049297673 
*/
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

/*
3.
Remove Gutenberg Block Library CSS from loading on the frontend.
Contributed by Andy Feliciotti, https://smartwp.com/remove-gutenberg-css/
*/
/*
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
*/

/*
4.
Disable Layout feature.
Contributed by @carolina-nymark, https://stackoverflow.com/a/71274320/1375163
*/
remove_filter( 'render_block', 'wp_render_layout_support_flag', 10, 2 );

/*
4.
Disable Layout feature if Gutenberg active
Contributed by @carolina-nymark, https://stackoverflow.com/a/71274320/1375163
*/
remove_filter( 'render_block', 'gutenberg_render_layout_support_flag', 10, 2 );
?>