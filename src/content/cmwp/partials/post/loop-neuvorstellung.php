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
<?php
if( is_user_logged_in() )
{
  ?>
<section class="main main-post">
	<article class="post article-single post-neuvorstellungen blog-<?php echo $blog_id_origin ?>" id="post-<?php the_ID(); ?>">

    <header class="article-header post-header">
      <div class="article-meta">
        <div>
          <span class="article-createDate">
            KW: <?php echo get_the_date('W (Y)'); ?>
          </span>
        </div>
        <div>
          <span class="article-author">
            bearbeitet von: <?php the_author(); ?>
          </span>
        </div>
      </div>
    </header>
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
        <div class='col col-md-3'><b>Trackname:</b></div>
        <div class='col col-md-9'><?php echo get_field('trackname');?></div>
      </div>
      <div class="row bg-gray-bright">
        <div class='col col-md-3'><b>Aussprache Trackname:</b></div>
        <div class='col col-md-9'><?php echo get_field('aussprache_trackname');?></div>
      </div>
      <div class="row bg-gray-dark">
        <div class='col col-md-3'><b>Aktuelles Album:</b></div>
        <div class='col col-md-9'><?php echo get_field('aktuelles_album');?></div>
      </div>
      <div class="row bg-gray-bright">
        <div class='col col-md-3'><b>Herkunft:</b></div>
        <div class='col col-md-9'><?php echo get_field('herkunft');?></div>
      </div>
      <div class="row bg-gray-dark">
        <div class='col col-md-3'><b>Gründung:</b></div>
        <div class='col col-md-9'><?php echo get_field('grundung');?></div>
      </div>
      <div class="row bg-gray-bright">
        <div class='col col-md-3'><b>Musikstil:</b></div>
        <div class='col col-md-9'><?php echo get_field('musikstil');?></div>
      </div>
      <div class="row bg-gray-dark">
        <div class='col col-md-3'><b>Besetzung:</b></div>
        <div class='col col-md-9'><?php echo get_field('besetzung');?></div>
      </div>
      <div class="row bg-gray-bright">
        <div class='col col-md-3'><b>Gossip:</b></div>
        <div class='col col-md-9'><?php echo get_field('gossip');?></div>
      </div>
    </div>

  </article><!-- /.post-->
</section><!-- /.main-->
<?php
} else {
  echo '<h1>Sie sind NICHT angemeldet !</h1>';
}
?>
