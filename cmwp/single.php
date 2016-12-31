<?php
/**
 * Diese PHP-Seite wird aufgefrufen wenn ein
 * Artikel angezeigt werden soll.
 *
 * The default template for displaying a singe post.
 */


get_header();

$blog_id_origin = (get_post_meta(get_the_ID(), 'origin_blog_id', true));
$blog_url = get_blog_details($blog_id_origin) -> siteurl;
$blog_name = get_blog_details($blog_id_origin) -> blogname;
//	$shortnames = array('1' => 'Campusmedien', '6' => 'Campusradio', '3' => 'Akrützel', '4' => 'Campustv');
$shortnames = array('6' => 'Campusmedien', '5' => 'Campusradio', '2' => 'Akrützel', '4' => 'Campus.tv');

?>

<div class="container container-main singlePadTop">
	<div class="full-width-content" id="global-main-content">
		<div class="content content-single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single', get_post_format() ); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
			<?php endif; ?>
		</div>
		<!-- /.content -->
	</div>
	<!-- /.global-main-content -->

	<?php comments_template( '', true ); ?>

</div>
<!-- /.container -->

<?php get_footer(); ?>
