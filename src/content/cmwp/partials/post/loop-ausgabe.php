<?php
/**
 * The default template for displaying content.
 */

$blog_id_origin = get_current_blog_id();

?>

<section class="main main-post timeline">
	<article class="post blog-<?php echo $blog_id_origin; ?>" id="post-<?php the_ID(); ?>">
    <section class="post-content">

			<div class="row">

				<?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()):?>

					<div class="col-xs-12 col-sm-3">
								<?php
									$thumbnailAttr = array(
											'class' => "thumbnail",
											'alt'   => "Coverbild"
									);
									the_post_thumbnail( 'ausgabe-thumbnail', $thumbnailAttr );
								 ?>
					</div>

				<?php endif; ?>

					<div class="col-xs-12 col-sm-9">
			      <section class="ausgabe-body">
			      <!-- 	<p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p>  -->
			        <div class="title">
			          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></time></a>
							</div>
							<div class="h3">Inhalt der Ausgabe</div>
			        <?php
								$content = '<div class="content">';
								$content .= get_the_content('weiterlesen ...');
								$content .= '</div>';
								print $content;
							?>
			        <br><br>
							Veröffentlich am: <time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>"><?php echo get_the_date('d.m.Y'); ?>
							<br>
			        <?php $pdf_link = get_field('pdf_document');?>
			        <a href="<?php echo $pdf_link['url']; ?>" class="" alt="Link zum Download/Lesen" title="Link zum Download/Lesen" /><span class="text-danger">PDF-Link</span></a>
							<br><br>
			      </section>
						<?php the_tags('<section class="post-tags"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>'); ?>
					</div>

			</div>  <!-- row -->
		</section>


		<!-- FOOTER / META -->
		<footer class="post-bottom meta">
			<div class="meta-comments">
				<span>
					<a href="#comments">
						<?php // comments_number( '<i class="fa fa-comment-o"></i> 0', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
					</a>
				</span>
			</div>
			<div class="meta-categories">
				<span><?php the_category(', ') ?></span>
			</div>
		</footer>

	</article><!-- /.post-->
</section><!-- /.main-->
