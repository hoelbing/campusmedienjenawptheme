<?php
/**
 * Seite ohne header und ohne footer
 * Template Name: Page mit Sidebar
 *
 */
?>

	<?php get_header(); ?>

	<div class="container container-main">
		<div class="row">
			<div class="" id="global-main-content">
				<div class="content content-single">
					<?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
					<?php get_template_part( 'content-index', 'page', get_post_format() ); ?>
					<?php endwhile; else : ?>
					<p>
						<?php _e('Diese Seite gibt es nicht :('); ?>
					</p>
					<?php endif; ?>
				</div>
				<!-- /.content -->
			</div>
			<!-- /.global-main-content -->
			<?php get_sidebar(); ?>
			<!-- /.global-sidebar -->
		</div>
	</div>
	<!-- /.container -->

	<?php get_footer(); ?>