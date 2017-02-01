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

					<!-- player symbol anzeigen -->
					<section class="main timeline hidden-xs">
						<article class="post blog-<?php echo $blog_id_origin ?>">
					    <a class="blog-logo blog-<?php echo $blog_id_origin ?>" href="<?php echo $blog_url ?>">
					<!--			<img src="<?php echo bloginfo('template_directory'); ?>/img/logo_icon/logo_blog_<?php echo $blog_id_origin; ?>.png" alt=""/>-->
								<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
									<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
								<?php endif; ?>
							</a>

							<section class="post-top">
								<section class="post-content">
											<div class="border-bottom-grey">
												<a href="<?php home_url(); ?>/interaktiv/webplayer/"> <img
													class="header-image" alt="CampusRadio-Jena Logo"
													title="CampusRadio-Jena Logo"
													src="<?php echo bloginfo('template_directory'); ?>/images/livestream_icon_eule.png">
												</a>
											</div>
								</section>
							</section>

						</article><!-- /.post-->
					</section><!-- /.main-->


				<?php
/*
                                $page = (get_query_var('page')) ? get_query_var('page') : 1;

                                // ausschliessen die Kategorie 'allgemein' anzeigen
                                query_posts(array ( 'category_name' => 'allgemein','paged' => get_query_var( 'paged' )));
                                global $more;
                                $more = 0;
*/
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; else: ?>
  					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
			</div>
			<!-- /.content -->

			<?php
			//das WP Plugin 'wp_pagenavi' einfuegen (Seitennavigation)
			if (function_exists('wp_pagenavi'))
			{
							echo '<div class="col-sm-2"> </div>';
							echo '<div id="pagenavi" class="col-xs-12">';
							wp_pagenavi();
							echo '</div><!-- END pagenavi-->';
							echo '<div class="col-sm-2"> </div>';
			}
			else {
				# code...
				?>
					<div id="nav-post"><?php posts_nav_link('  ', __('<button class="button">« Neuere Beiträge</button>'), __('<button class="button">Ältere Beiträge »</button>')); ?></div>
				<?php
			}
		?>
		</div>
		<!-- /.global-main-content -->
			<div class="" id="global-sidebar">
				<?php get_sidebar(); ?>
			</div><!-- /.global-sidebar -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
<?php get_footer(); ?>
