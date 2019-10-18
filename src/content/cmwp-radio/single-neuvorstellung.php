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
			<div class="content content-neuvorstellung">
        <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
              get_template_part( 'partials/post/loop', 'neuvorstellung', get_post_format() );

              // If comments are open or we have at least one comment, load up the comment template.
              //if ( comments_open() || get_comments_number() ) {
              //  comments_template();
              //}
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
