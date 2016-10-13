<?php
/**
 * The default template for displaying a page.
 Template Name: Kategorieliste
 */
?>
<?php get_header(); ?>
	<div class="container container-main">
		<div class="full-width-content" id="global-main-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section class="main">
					<article class="post" id="post-<?php the_ID(); ?>">
						<section class="post-content">
<!--							<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>-->
							<p><?php echo the_content(); ?></p>

							<section class="category-list">
								<?php
									$args=array(
										'orderby' => 'count',
										'order' => 'DESC',
										'show_count' => true,
										'title_li' => '',
										'hide_empty' => 0);

									$categories = get_categories($args);
									foreach($categories as $category): ?>
										<aside class="category category-<?php echo $category->slug; ?>">
											<a class="category-link" href="<?php echo get_category_link($category->term_id); ?>" title="<?php echo $category->name; ?>">
												<?php if (function_exists('z_taxonomy_image_url') && z_taxonomy_image_url($category->term_id) != false): ?>
												<img src="<?php echo z_taxonomy_image_url($category->term_id, 'cinema-thumbnail'); ?>" alt="<?php echo $category->name; ?>" />
												<?php endif; ?>

												<aside class="category-meta">
													<p class="category-name"><?php echo $category->name; ?></p>
													<p class="category-description"><?php echo $category->description; ?></p>
												</aside>
											</a>
										</aside>
								<?php endforeach; ?>
							</section>
						</section>
					</article>
				</section>
			<?php endwhile; else: ?>
			<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
			<?php endif; ?>
		</div> <!-- /.global-main-content -->
	</div> <!-- /.container -->
<?php wp_enqueue_script( 'masonry' ); ?>

<?php
	function initMasonry() {
		if ( wp_script_is( 'jquery', 'done' ) ) {
?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.category-list').masonry({
			columnWidth: 190,
			itemSelector: '.category',
			gutter: 10,
			isFitWidth: true // center container
		});
	});
</script>
<?php
	}
}
add_action( 'wp_footer', 'initMasonry' );
?>

<?php get_footer(); ?>

