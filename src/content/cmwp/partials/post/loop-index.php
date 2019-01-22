<?php
/**
 * The default template for displaying content.
 */
$blog_id_origin = get_post_meta(get_the_ID(), 'origin_blog_id', true);
// $blog_url = get_blog_details($blog_id_origin) -> siteurl;
// $blog_name = get_blog_details($blog_id_origin) -> blogname;
// $shortnames = array('6' => 'Campusmedien', '5' => 'Campusradio', '2' => 'Akrützel', '4' => 'Campus.tv');

?>

<section class="main timeline">
	<article class="post article article-index blog-<?php echo $blog_id_origin ?>" id="article-<?php the_ID(); ?>">
    <div class="article-area row">
    <?php
      if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) {
        $thumbnailAttr = array(
            'class' => "thumbnail",
            'alt'   => "Coverbild"
        );
        echo '<div class="article-area-thumbnail">';
        the_post_thumbnail( 'thumbnail', $thumbnailAttr );
        echo '</div>';
      }
    ?>

		<div class="article-area-content">

			<div class="<?php echo $columnClassForContent; ?>">
				<header class="article-header">
					<span class="article-title">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</span>
				</header>

				<section class="article-content" aria-label="content">
					<?php echo the_content('weiterlesen...'); ?>
				</section>

			<div>
      <!-- META -->
      <aside class="article-meta ">
				<?php
          // has a post tags then show this as a 'section'-tag
          the_tags('<section class="article-tags"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>');
				?>
        <div>
          <span class="meta-date">
            <time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>">
              <?php echo get_the_date('d.m.Y'); ?>
            </time>
          </span>
          <span class="meta-comments">
            <a href="<?php the_permalink() ?>#comments" class="goToArticleComments">
              <?php comments_number( '<i class="fa fa-comment-o"></i> 0', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
            </a>
          </span>
        </div>
      </aside>
		</div>

    </div><!-- /.article-area-->
	</article><!-- /.article-->
</section><!-- /.main-->
