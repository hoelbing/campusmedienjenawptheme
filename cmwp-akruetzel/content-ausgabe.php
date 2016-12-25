<?php
/**
 * The default template for displaying content.
 */

$blog_id_origin = get_current_blog_id();

?>

<section class="main main-post timeline">
	<article class="post blog-<?php echo $blog_id_origin; ?>" id="post-<?php the_ID(); ?>">
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
        <h2 class="post-title pull-left">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="h3">Inhalt der Ausgabe</div>
        <?php echo the_content('weiterlesen...'); ?>
        <br>
        <div class="h3">Download</div>
        <?php $pdf_link = get_field('pdf_document');?>
        <a href="<?php echo $pdf_link['url']; ?>" class="" alt="Link zum Download/Lesen" title="Link zum Download/Lesen" /><span class="text-danger">PDF-Link</span></a>
				<br><br>
        <?php the_tags('<div class="tags-post"><i class="glyphicon glyphicon-tag"></i> ', ", ", '</div>'); ?>
      </section>
    </section>

		<!-- FOOTER / META -->
		<footer class="post-bottom meta">

			<div class="meta-date">
				<span> veröffentlicht am <time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>"><?php echo get_the_date('d.m.Y'); ?></time></span>
			</div>

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
