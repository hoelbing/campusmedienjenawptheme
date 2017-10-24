<?php
/**
 * The default template for displaying a page.
 */
?>
<?php get_header(); ?>

<div class="container container-main singlePadTop">
	<div class="full-width-content" id="global-main-content">
		<div class="content content-single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page', get_post_format() ); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
			<?php endif; ?>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.global-main-content -->

</div>
<!-- /.container -->

<?php get_footer(); ?>
