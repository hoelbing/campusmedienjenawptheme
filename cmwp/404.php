<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div class="container container-main">
		<div class="row">
			<div class="" id="global-main-content">
				<div class="content">

					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Seite nicht gefunden', 'twentysixteen' ); ?></h1>
					</header>

					<div class="page-wrapper">
						<div class="page-content">
							<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</div><!-- .page-wrapper -->

				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
