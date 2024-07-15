<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moonrise-mv
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header lg:py-12 py-10">
		<?php
		if ( ! is_front_page() ) {
			the_title( '<h1 class="entry-title ext-5xl sm:text-7xl font-title font-normal">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title ext-5xl sm:text-7xl font-title font-normal">', '</h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php moonrise_mv_post_thumbnail(); ?>

	<div <?php moonrise_mv_content_class( 'entry-content lg:text-sm text-base font-body' ); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __( 'Pages:', 'moonrise-mv' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__( 'Edit <span class="sr-only">%s</span>', 'moonrise-mv' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
