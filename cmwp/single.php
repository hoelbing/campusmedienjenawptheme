<?php
/**
 * The default template for displaying a singe post.
 */
?>
<?php get_header(); ?>

<?php
	$hasVideo = function_exists('has_post_video') && has_post_video();
	$cinemaHeader = get_post_meta(get_the_ID(), 'cinema_thumbnail', true) == "yes";
	$copyrightImage = get_post_meta(get_the_ID(), 'copyright_image', true);
?>

<?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()):?>

<section class="<?php if ($cinemaHeader) echo 'container-fluid'; else echo 'container'; ?>">
	<aside class="post-thumbnail post-header<?php if($hasVideo) echo ' dark'; ?>">
		<?php
			if (function_exists('has_post_video') && has_post_video()) {
				the_post_thumbnail('full-width-cinema-header');
			} else {
				//when cinema header is set, set to 100% width
				if ($cinemaHeader) {
					echo '<div class="image-wrap" style="background-image: url(';
					echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 1200 )[0];
					echo ')">';

					the_post_thumbnail(1200);

				} else {
					echo '<div class="image-wrap small-image">';
					echo the_post_thumbnail('830');
				}

				echo '</div>';
			}
		?>
		<section class="copyright">
			<span>
				<i class="fa fa-copyright"></i>
				<?php echo $copyrightImage; ?>
			</span>
		</section>

	</aside>
</section>
<?php endif; ?>

<div class="container container-main">
	<div class="full-width-content" id="global-main-content">
		<div class="content content-single">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single', get_post_format() ); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
			<?php endif; ?>
		</div> <!-- /.content -->
	</div> <!-- /.global-main-content -->

	<?php comments_template( '', true ); ?>

</div> <!-- /.container -->

<?php get_footer(); ?>
