<?php get_header(); ?>
	<div class="container container-main">
		<div class="row">
			<div class="" id="global-main-content">
				<div class="content">
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
