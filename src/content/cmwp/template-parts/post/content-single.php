<?php
/**
 * The default template for displaying content.
 */
 $hasVideo = function_exists ( 'has_post_video' ) && has_post_video ();
 $cinemaHeader = $single_size_thumbnail = get_post_meta ( get_the_ID (), 'single_size_thumbnail', true );
 $copyrightImage = get_post_meta ( get_the_ID (), 'copyright_image', true );
 $columnClassForContent = "post-content";
?>

<section class="main main-post">
	<article class="post single blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">

		<section class="post-top">
				<?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()):?>

				<section class="<?php if ($cinemaHeader) echo 'container-fluid'; else echo 'container'; ?> text-center">
					<aside class=" post-header <?php if($hasVideo) echo ' dark'; ?>">
					<?php
					// is it a video
					if (function_exists ( 'has_post_video' ) && has_post_video ()) {
						the_post_thumbnail ( 'full-width-cinema-header' );
					// if not
					} else {
            the_post_thumbnail( $single_size_thumbnail, array('class'=> "post-img img-fluid", 'alt' => "Bild" ) );
					}
          if ($copyrightImage !=""){
					?>
					<section class="copyright">
						<span> <i class="fa fa-copyright"></i>
							<?php echo $copyrightImage; ?>
						</span>
					</section>
        <?php
          } ?>

				</aside>
			</section>
		<?php endif; ?>
    
    <header class="post-header <?php echo $columnClassForContent; ?>">
      <div class="post-title text-center">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </div>
    </header>

    <section class="post-the-content <?php echo $columnClassForContent; ?>" aria-label="content">
      <!-- <p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p> -->
      <?php echo the_content('weiterlesen...'); ?>
    </section>

    <?php
    // has a post one or more tags then create a 'section'-tag
    the_tags('<section class="post-tags '.$columnClassForContent.'"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>');
    ?>
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
						<?php comments_number( '<i class="fa fa-comment-o"></i> 0', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
					</a>
				</span>
			</div>

			<div class="meta-categories">
				<span><?php the_category(', ') ?></span>
			</div>
		</footer>

	</article><!-- /.post-->
</section><!-- /.main-->
