<?php
/**
 * The default template for displaying content.
 */
?>

<?php
	$blog_id_origin = get_current_blog_id(); //(get_post_meta(get_the_ID(), 'origin_blog_id', true));
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
				$columnClassForContent = '';
				if ( has_post_thumbnail() ) {
					$big_tn = get_post_meta(get_the_ID(), 'big_thumbnail', true);
					if (isset($big_tn) && $big_tn == 'yes') {
						echo '<aside class="post-thumbnail full-width"><a href="' . get_the_permalink() . '" title="">';
						the_post_thumbnail('full-width-cinema-header');
					} else {
						echo '<aside class="post-thumbnail"><a href="' . get_the_permalink() . '" title="">';
						$columnClassForContent = 'split-screen';
						//the_post_thumbnail('split-screen-thumbnail');
						the_post_thumbnail( array(667, 400) );
					}


					echo '</a></aside>';
				}
			?>

			<section class="post-content <?php echo $columnClassForContent; ?>">
			<!-- 	<p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p>  -->
				<h2 class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>

				<?php echo the_content('weiterlesen...'); ?>
				<br>
				<?php the_tags('<div class="tags-post"><i class="glyphicon glyphicon-tag"></i> ', ", ", '</div>'); ?>
			</section>
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
    
		<!-- FOOTER -->
		<footer></footer>
    
	</article><!-- /.post-->
</section><!-- /.main-->
