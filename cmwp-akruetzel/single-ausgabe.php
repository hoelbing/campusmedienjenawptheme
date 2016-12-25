<?php
/**
 * Diese PHP-Seite wird aufgefrufen wenn ein
 * Artikel angezeigt werden soll.
 *
 * The default template for displaying a singe post.
 */


get_header();

//echo $blog_url .":".$blog_name.":". $blog_id_origin.":". get_current_blog_id();
?>

<div class="container container-main">
	<div class="row">

		<div class="full-width-content" id="global-main-content">
			<div class="content content-single">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'ausgabe', get_post_format() ); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Diese Ausgabe gibt es nicht :('); ?></p>
				<?php endif; ?>
			</div>
			<!-- /.content -->
		</div>
		<!-- /.global-main-content -->

		<?php comments_template( '', true ); ?>
	</div>
<!-- /.row -->
</div>
<!-- /.container -->
<?php get_footer(); ?>
