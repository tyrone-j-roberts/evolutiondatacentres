<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
		the_content(sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'Infinity'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		));

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'Infinity'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //gutenberg_starter_theme_entry_footer(); 
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->