<?php
/**
 * The default template for displaying content.
 */
 // $hasVideo = function_exists ( 'has_post_video' ) && has_post_video ();
 // $cinemaHeader = $single_size_thumbnail = get_post_meta ( get_the_ID (), 'single_size_thumbnail', true );
 // $copyrightImage = get_post_meta ( get_the_ID (), 'copyright_image', true );
 $blog_id_origin = get_post_meta(get_the_ID(), 'origin_blog_id', true);
 $columnClassForContent = "post-content";
?>

<section class="main main-post">
	<article class="post article-single post-cddw blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">

    <header class="article-header post-header">
      <div class="article-meta">
        <div>
          <span class="article-createDate">
            <?php echo get_the_date('d.m.Y'); ?>
          </span>
          <span class="article-comments">
            <a href="#comments">
              <?php comments_number( '<i class="fa fa-comment-o"></i> 0', '<i class="fa fa-comment-o"></i> 1', '<i class="fa fa-comment-o"></i> %' ); ?>
            </a>
          </span>
          <span class="article-categories">
            <?php //the_category(', '); ?>
          </span>
        </div>
        <div class="article-author">
          <span class="prevalueauthor">von:</span>
          <span class="authorname">
            <?php the_author(); ?>
          </span>
			</div>
      </div>
      <div class="article-title text-center">
        <?php the_title(); ?>
      </div>
    </header>

    <section class="post-the-content article-content <?php echo $columnClassForContent; ?>" aria-label="content">
      <?php echo the_content('weiterlesen...'); ?>
    </section>

		<!-- FOOTER / META -->
		<footer class="article-footer">
      <?php
      // has a post one or more tags then create a 'section'-tag
      the_tags('<section class="post-tags '.$columnClassForContent.'"><i class="fa fa-tags" aria-hidden="true"></i> ', ", ", '</section>');
      ?>
		</footer>

    <div class="goToHome">
      <a class="btn btn-primary" href="/">zur Startseite</a>
    </div>

    <?php
    if( is_user_logged_in() )
    {
      ?>
      <hr>
      <br>
      <div class='intern' style="line-height: 2.5rem;">
        <div class="row bg-gray-dark">
          <div class='col col-md-3'><b>Artistname:</b></div>
          <div class='col col-md-9'><?php echo get_field('artistname');?></div>
        </div>
        <div class="row bg-gray-bright">
          <div class='col col-md-3'><b>Aussprache Artistname:</b></div>
          <div class='col col-md-9'><?php echo get_field('aussprache_artistname');?></div>
        </div>
        <div class="row bg-gray-dark">
          <div class='col col-md-3'><b>Albumname:</b></div>
          <div class='col col-md-9'><?php echo get_field('albumname');?></div>
        </div>
        <div class="row bg-gray-bright">
          <div class='col col-md-3'><b>Aussprache Albumname:</b></div>
          <div class='col col-md-9'><?php echo get_field('aussprache_albumname');?></div>
        </div>
        <div class="row bg-gray-dark">
          <div class='col col-md-3'><b>Herkunft:</b></div>
          <div class='col col-md-9'><?php echo get_field('herkunft');?></div>
        </div>
        <div class="row bg-gray-bright">
          <div class='col col-md-3'><b>Gründung:</b></div>
          <div class='col col-md-9'><?php echo get_field('grundung');?></div>
        </div>
        <div class="row bg-gray-dark">
          <div class='col col-md-3'><b>Musikstil:</b></div>
          <div class='col col-md-9'><?php echo get_field('musikstil');?></div>
        </div>
        <div class="row bg-gray-bright">
          <div class='col col-md-3'><b>Besetzung:</b></div>
          <div class='col col-md-9'><?php echo get_field('besetzung');?></div>
        </div>
        <div class="row bg-gray-dark">
          <div class='col col-md-3'><b>Gossip:</b></div>
          <div class='col col-md-9'><?php echo get_field('gossip');?></div>
        </div>
      </div>
    <?php
    }
    ?>

  </article><!-- /.post-->
</section><!-- /.main-->
