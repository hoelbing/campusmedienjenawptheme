<?php
/**
 * The default template for displaying content.
 */

$blog_id_origin = get_current_blog_id();

?>

<section class="main main-post timeline">
	<article class="post article article-ausgabe blog-<?php echo $blog_id_origin; ?>" id="post-<?php the_ID(); ?>">
    <div class="article-area row">

      <?php
        if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) {
          $thumbnailAttr = array(
              'class' => "thumbnail",
              'alt'   => "Coverbild"
          );
          echo '<div class="article-area-thumbnail">';
          the_post_thumbnail( 'ausgabe-thumbnail', $thumbnailAttr );
          echo '</div>';
        }
      ?>

      <div class="article-area-content">
        <!-- 	<p class="post-blog-origin post-blog-<?php echo $blog_id_origin ?>"><?php echo $shortnames[$blog_id_origin] ?></p>  -->
        <header class="article-header">
          <span class="article-title">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </span>
        </header>
        <section class="article-content" aria-label="content">
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
        <?php // the_tags('<section class="post-tags"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>'); ?>

        <!-- META -->
        <aside class="article-meta ">
          <?php
            // has a post tags then show this as a 'section'-tag
            the_tags('<section class="article-tags"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>');
          ?>
          <div>
            <span class="meta-comments">
              <a href="<?php the_permalink() ?>#comments" class="goToArticleComments">
                <?php comments_number( '', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
              </a>
            </span>
          </div>
        </aside>
      </div>

    </div>  <!-- row -->


	</article><!-- /.post-->
</section><!-- /.main-->
