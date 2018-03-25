<?php
/**
 * The default template for displaying a page.
 * 
 * 
 */
?>

	<?php get_header(); ?>

	<div class="container container-main">
		<div class="row">
			<div class="content" id="global-main-content-full-width">
				<div class="content-single">
					<?php 
						if (have_posts()) :
							while (have_posts()) :
								the_post();
								get_template_part( 'content-page', 'page', get_post_format() );
							endwhile; else : ?>
					<p>
						<?php _e('Diese Seite gibt es nicht :('); ?>
					</p>
					<?php endif; ?>
				</div>
				<!-- /.content -->
			</div>
			<!-- /.global-main-content -->
		</div>
	</div>
	<!-- /.container -->

	<?php get_footer(); ?>
