<?php get_header(); ?>
	<div class="container container-main">
		<div class="row">
			<div class="" id="global-main-content">
				<div class="content">
				
					<div class="border-bottom-grey hidden-xs">
						<a href="<?php home_url(); ?>/interaktiv/webplayer/">
							<img class="header-image" alt="CampusrRadio-Jena Logo" title="CampusrRadio-Jena Logo" src="https://www.campusradio-jena.de/wp-content/themes/CampusRadioJenaWPTemplate/images/livestream_icon_eule.png">
						</a>
					</div>
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; else: ?>
  					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
 					<?php endif; ?>
					<div id="nav-post"><?php posts_nav_link('  ', __('<button class="button">« Neuere Beiträge</button>'), __('<button class="button">Ältere Beiträge »</button>')); ?></div>
				</div> <!-- /.content -->

			</div> <!-- /.global-main-content -->
			<div class="" id="global-sidebar">
				<?php get_sidebar(); ?>
			</div><!-- /.global-sidebar -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
<?php get_footer(); ?>
