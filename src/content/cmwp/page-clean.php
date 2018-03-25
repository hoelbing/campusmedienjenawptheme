<?php
/**
 * Seite ohne header und ohne footer
 * Template Name: clean
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title('-', true, 'left'); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	    <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class([$bodyBlogClass]); ?>>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
		<?php endif; ?>

	
	    <?php wp_footer(); ?>
	
	</body>
</html>