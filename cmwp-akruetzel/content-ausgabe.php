<?php
/**
 * The default template for displaying content.
 */

$blog_id_origin = get_current_blog_id();

?>

<section class="main main-post timeline">
	<article class="post blog-<?php echo $blog_id_origin; ?>" id="post-<?php the_ID(); ?>">
    <section class="post-top">

			<div class="row">

				<?php if (function_exists('has_post_thumbnail') && has_post_thumbnail()):?>

					<div class="col-xs-12 col-sm-3">
								<?php
									$thumbnailAttr = array(
											'class' => "ausgabe-img",
											'alt'   => "Coverbild"
									);
									the_post_thumbnail( 'ausgabe-thumbnail', $thumbnailAttr );
								 ?>
					</div>

				<?php endif; ?>

					<div class="col-xs-12 col-sm-9">
			      <section class="ausgabe-content">
			      <!-- 	<p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p>  -->
			        <div class="ausgabe-title">
			          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?> vom <time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>"><?php echo get_the_date('d.m.Y'); ?></time></a>
			        </div>
			        <?php
								$content = '<div class="h3">Inhalt der Ausgabe</div>';
								$content .= get_the_content('weiterlesen ...');
								print $content;
								//echo the_content('weiterlesen...');
							?>
			        <br>
			        <div class="h3">Download</div>
			        <?php $pdf_link = get_field('pdf_document');?>
			        <a href="<?php echo $pdf_link['url']; ?>" class="" alt="Link zum Download/Lesen" title="Link zum Download/Lesen" /><span class="text-danger">PDF-Link</span></a>
							<br><br>
			        <?php the_tags('<div class="tags-post"><i class="glyphicon glyphicon-tag"></i> ', ", ", '</div>'); ?>
			      </section>
					</div>

				</div>  <!-- row -->
	    </section>


		<!-- FOOTER / META -->
		<footer class="post-bottom meta">
			<div class="meta-comments">
				<span>
					<a href="#comments">
						<?php comments_number( '0 Kommentare', '1 Kommentar', '% Kommentare' ); ?>
					</a>
				</span>
			</div>
		</footer>

	</article><!-- /.post-->
</section><!-- /.main-->
