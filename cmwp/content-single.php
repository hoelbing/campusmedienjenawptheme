<?php
/**
 * The default template for displaying content.
 */
?>

<?php
	$blog_id_origin = (get_post_meta(get_the_ID(), 'origin_blog_id', true));
	$blog_url = get_blog_details($blog_id_origin) -> siteurl;
	$blog_name = get_blog_details($blog_id_origin) -> blogname;
	$shortnames = array('1' => 'Campusmedien', '2' => 'Campusradio', '3' => 'Akrützel', '4' => 'Campus.tv');
?>

<section class="main main-post">
	<article class="post blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">
		<section class="post-top">
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
				<span><?php the_category(',') ?></span>
			</div>
		</footer>

	</article><!-- /.post-->
</section><!-- /.main-->
