<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package customtheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	 <header class="entry-header page__header">
		 <?php customtheme_post_thumbnail(); ?>
		 <div class="page__title">
			 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<div class="page__header__car">
			<img class="alignnone size-full wp-image-991" src="http://topborn.herokuapp.com/wp-content/uploads/2018/01/car.png" alt="car" />
		</div>
	</header> <!--.entry-header -->

	<div class="entry-content">
		<div class="container"
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'customtheme' ),
				'after'  => '</div>',
			) );
		?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'customtheme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
