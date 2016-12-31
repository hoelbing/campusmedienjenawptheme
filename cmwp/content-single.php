<?php
/**
 * The default template for displaying content.
 */
 $hasVideo = function_exists ( 'has_post_video' ) && has_post_video ();
 $cinemaHeader = get_post_meta ( get_the_ID (), 'cinema_thumbnail', true ) == "yes";
 $copyrightImage = get_post_meta ( get_the_ID (), 'copyright_image', true );

?>

<section class="main main-post">
	<article class="post blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">

		<section class="post-top">
				<?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()):?>

				<section class="<?php if ($cinemaHeader) echo 'container-fluid'; else echo 'container'; ?>">
					<aside class=" post-header <?php if($hasVideo) echo ' dark'; ?>">
					<?php
					// is it a video
					if (function_exists ( 'has_post_video' ) && has_post_video ()) {
						the_post_thumbnail ( 'full-width-cinema-header' );
					// if not
					} else {
						// when cinema header is set, set to 100% width
						if ($cinemaHeader) {
							/*echo '<div class="image-wrap" style="background-image: url(';
							echo wp_get_attachment_image_src ( get_post_thumbnail_id ( $post->ID ), 1200 ) [0];
							echo ')">';
*/						echo '<div class="image-wrap">';
							the_post_thumbnail( 'full-width-cinema-header', array('class'=> "post-img", 'alt' => "Bild" ) );
							echo '</div>';
						} else {
							echo '<div class="image-wrap small-image center-block">';
							the_post_thumbnail( '', array('class'=> "post-img paddingBot10 center-block", 'alt' => "Bild" ) );
							echo '</div>';
						}
					//
					}

					/*?>
					<section class="copyright">
						<span> <i class="fa fa-copyright"></i>
							<?php echo $copyrightImage; ?>
						</span>
					</section>
					*/?>
				</aside>
			</section>
		<?php endif; ?>
			<section class="post-content <?php echo $columnClassForContent; ?>">
				<!-- <p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p> -->
				<h1 class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>

				<?php echo the_content('weiterlesen...'); ?>
			</section>
		</section>

		<!-- FOOTER / META -->
		<footer class="post-bottom meta">
			<div class="meta-author">
				<p class="theauthor">
					<?php the_author() ?>
					<!-- Postaufrufe: <?php echo Post_Views::get_post_views(get_the_ID()); ?> -->
				</p>
			</div>

			<div class="meta-date">
				<span><time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>"><?php echo get_the_date('d.m.Y'); ?></time></span>
			</div>

			<div class="meta-comments">
				<span>
					<a href="#comments">
						<?php comments_number( '0 Kommentare', '1 Kommentar', '% Kommentare' ); ?>
					</a>
				</span>
			</div>

			<div class="meta-categories">
				<span><?php the_category(', ') ?></span>
			</div>
		</footer>

	</article><!-- /.post-->
</section><!-- /.main-->
