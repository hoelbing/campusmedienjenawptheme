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

<div class="container container-main">
	<div class="row">
		<div class="" id="global-main-content-full-width">
			<div class="content content-single">
						<?php 

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/post/content-single', get_post_format() );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
/*
								the_post_navigation(
									array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
									)
								);
*/
							endwhile; // End of the loop.
						?>
					</div>
				<!-- /.content -->
			</div>
		<!-- /.global-main-content -->

	</div>
</div>
<!-- /.container -->

<?php get_footer();
