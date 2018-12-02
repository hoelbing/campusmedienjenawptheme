<?php
/**
 * Diese PHP-Seite wird auf der Startseite aufgerufen
 *
 */

get_header();

$blog_id_origin = get_post_meta(get_the_ID(), 'origin_blog_id', true);
$blog_url = get_blog_details($blog_id_origin) -> siteurl;
$blog_name = get_blog_details($blog_id_origin) -> blogname;
$shortnames = array('6' => 'Campusmedien', '5' => 'Campusradio', '2' => 'Akrützel', '4' => 'Campus.tv');

?>

<div class="container container-main">
	<div class="row">
		<div class="" id="global-main-content">
			<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/post/content-index', get_post_format() ); ?>
					<?php endwhile; else: ?>
  					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
 					<?php endif; ?>
			</div>
			<!-- /.content -->

			<?php
			//das WP Plugin 'wp_pagenavi' einfuegen (Seitennavigation)
			if (function_exists('wp_pagenavi'))
			{
							echo '<div id="pagenavi" class="col-xs-12">';
							wp_pagenavi();
							echo '</div><!-- END pagenavi-->';

						//	wp_bs_pagination();
			}
			else {
				# code...
				?>
					<div id="nav-post">
						<?php posts_nav_link('  ', __('<button class="button">« Neuere Beiträge</button>'), __('<button class="button">Ältere Beiträge »</button>')); ?>
					</div>
				<?php
			}
		?>
		</div>
		<!-- /.global-main-content -->
			<?php get_sidebar(); ?>
		<!-- /.global-sidebar -->
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->

<?php get_footer();
