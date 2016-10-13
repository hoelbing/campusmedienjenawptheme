<?php
/**
 * The default template for displaying a page.
 */
?>
<?php get_header(); ?>
	<div class="container container-main">
		<div class="full-width-content" id="global-main-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="content content-single">
					<section class="main">
						<article class="post" id="post-<?php the_ID(); ?>">
							<section class="post-top">
								<section class="post-content">
									<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
									<p><?php echo the_content(); ?></p>
								</section>
							</section>
						</article>
					</section>
				</div>
			<?php endwhile; else: ?>
			<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
			<?php endif; ?>
		</div> <!-- /.global-main-content -->
	</div> <!-- /.container -->
<?php get_footer(); ?>
