<?php
	$blog_id_origin = get_post_meta(get_the_ID(), 'origin_blog_id', true);
	$blog_url = get_blog_details($blog_id_origin) -> siteurl;
	// $blog_name = get_blog_details($blog_id_origin) -> blogname;
?>

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
								<a href="<?php home_url(); ?>/interaktiv/webplayer/">
									<img
										class="header-image img-fluid" alt="CampusRadio-Jena Logo"
										title="CampusRadio-Jena Logo"
										src="<?php echo get_stylesheet_directory_uri(); ?>/img/livestream_icon_eule.png">
								</a>
							</div>
				</section>
			</section>

		</article><!-- /.post-->
	</section><!-- /.main-->
</div>