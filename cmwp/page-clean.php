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
		<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class([$bodyBlogClass]); ?>>
	
		<div class="container container-main">
			<div class="full-width-content" id="global-main-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php echo the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Diese Seite gibt es nicht :('); ?></p>
				<?php endif; ?>
			</div> <!-- /.global-main-content -->
		</div> <!-- /.container -->
	
	    <?php wp_footer(); ?>
	
	</body>
</html>