<?php
/**
 * The default template for displaying content.
 */
$blog_id_origin = get_post_meta(get_the_ID(), 'origin_blog_id', true);
$blog_url = get_blog_details($blog_id_origin) -> siteurl;
$blog_name = get_blog_details($blog_id_origin) -> blogname;
$shortnames = array('6' => 'Campusmedien', '5' => 'Campusradio', '2' => 'Akrützel', '4' => 'Campus.tv');

?>

<section class="main timeline">
	<article class="post blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">
        <a class="blog-logo blog-<?php echo $blog_id_origin ?>" href="<?php echo $blog_url ?>">
<!--			<img src="<?php echo bloginfo('template_directory'); ?>/img/logo_icon/logo_blog_<?php echo $blog_id_origin; ?>.png" alt=""/>-->
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			<?php endif; ?>
		</a>

		<section class="post-top">

			<?php
				/*
				$columnClassForContent = "";
				if ( has_post_thumbnail() ) {
					$asideClassForThumbnail = "";
					$postClassForThumbnail = "";

					$size_thumbnail = get_post_meta(get_the_ID(), 'big_thumbnail', true);

					if ( $size_thumbnail == 'yes' ) {
						$asideClassForThumbnail = "post-thumbnail full-width";
						$postClassForThumbnail = "full-width-cinema-header";
					} else {
						$columnClassForContent = "split-screen";
						$asideClassForThumbnail = "post-thumbnail split-thumbnail";
						$postClassForThumbnail = "default_max-thumbnail'";
					}

					echo '<aside class="' . $asideClassForThumbnail . '"><a href="' . get_the_permalink() . '" title="' .'">';
					the_post_thumbnail($postClassForThumbnail);
					echo '</a></aside>';
				} */
			?>
			<header class="post-header <?php echo $columnClassForContent; ?>">
				<span class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</span>
			</header>

			<section class="post-content <?php echo $columnClassForContent; ?>" aria-label="content">
				<?php echo the_content('weiterlesen...'); ?>
			</section>

			<?php
			// has a post tags then show this as a 'section'-tag
			the_tags('<section class="post-tags '.$columnClassForContent.'"><i class="glyphicon glyphicon-tag"></i> ', ", ", '</section>');
			?>
		</section>

		<!-- META -->
		<aside class="post-bottom meta">
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
						<?php comments_number( '<i class="fa fa-comment-o"></i> 0', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
					</a>
				</span>
			</div>

			<div class="meta-categories">
				<span><?php the_category(', ') ?></span>
			</div>

		</aside>

	</article><!-- /.post-->
</section><!-- /.main-->
