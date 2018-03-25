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
			<div id="global-main-content">
				<div class="content">
					<?php 
						if (have_posts()) :
							while (have_posts()) :
								the_post();
								get_template_part( 'content-page', 'page', get_post_format() );
							endwhile; else : ?>
					<p>
						<?php _e('Ups, da ging irgendwas nicht. Diese Seite gibt es nicht :('); ?>
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