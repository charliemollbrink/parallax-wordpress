<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package customtheme
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function customtheme_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_spport( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'customtheme_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_spport( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_spport( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'customtheme-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
		),
	) );
}
add_action( 'after_setup_theme', 'customtheme_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function customtheme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_sarch() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}