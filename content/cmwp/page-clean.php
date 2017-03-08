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
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.min.css">
		<!-- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>  -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		
		<style type="text/css">
			/* source-sans-pro-regular - latin */
			@font-face {
			  font-family: 'Source Sans Pro';
			  font-style: normal;
			  font-weight: 400;
			  src: url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.eot'); /* IE9 Compat Modes */
			  src: local('Source Sans Pro'), local('SourceSansPro-Regular'),
			       url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
			       url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
			       url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.woff') format('woff'), /* Modern Browsers */
			       url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
			       url('<?php bloginfo('template_directory'); ?>/fonts/source-sans-pro-v9-latin-regular.svg#SourceSansPro') format('svg'); /* Legacy iOS */
			}
		</style>
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