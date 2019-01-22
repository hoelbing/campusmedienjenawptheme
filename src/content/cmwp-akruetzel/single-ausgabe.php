<?php
/**
 * Diese PHP-Seite wird aufgefrufen wenn ein
 * Artikel angezeigt werden soll.
 *
 * The default template for displaying a singe post.
 */

get_header();

?>

<div class="container container-main">
	<div class="row">
		<div class="" id="global-main-content-full-width">
			<div class="content content-ausgabe">
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              get_template_part( 'partials/post/loop', 'ausgabe', get_post_format() );

              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }
/*
								the_post_navigation(
									array(
										'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
										'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
									)
								);
*/
            }
          } else {
            echo '<p>';
            _e('Sorry, no posts matched your criteria.');
            echo '</p>';
          }
        ?>
      </div>
			<!-- /.content -->
		</div>
		<!-- /.global-main-content -->

	</div>
</div>
<!-- /.container -->

<?php get_footer();
