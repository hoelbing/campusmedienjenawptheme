<?php
    $currentBlogID = get_current_blog_id();
    $blogArray = wp_get_sites();


	function debug_to_console( $data ) {
		
		$output = '';
		
		if ( is_array( $data ) ) {
			$output .= "<script>console.warn( 'Debug Objects with Array.' ); console.log( '" . implode( ',', $data) . "' );</script>";
		} else if ( is_object( $data ) ) {
			$data    = var_export( $data, TRUE );
			$data    = explode( "\n", $data );
			foreach( $data as $line ) {
				if ( trim( $line ) ) {
					$line    = addslashes( $line );
					$output .= "console.log( '{$line}' );";
				}
			}
			$output = "<script>console.warn( 'Debug Objects with Object.' ); $output</script>";
		} else {
			$output .= "<script>console.log( 'Debug Objects: {$data}' );</script>";
		}
		
		echo $output;
	}
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
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	<?php
		$bodyBlogClass = 'blog-' . $currentBlogID;
	?>
</head>
<body <?php body_class([$bodyBlogClass]); ?>>

<nav class="navbar navbar-default navbar-primary" role="navigation">
    <div class="container">
        <section class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navigation ein-/ausblenden</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand <?php if ($currentBlogID == 6) echo "current" ?>" href="<?php echo get_blog_details( 6 ) -> siteurl; ?>">
				<?php echo get_blog_details( 6 ) -> blogname; // change dynamically later ?>
            </a>

			<a class="navbar-brand navbar-brand-mobile" href="<?php bloginfo( 'url' ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>

<!--

            <a class="navbar-brand-image <?php if ($currentBlogID == 1) echo "current" ?>" href="<?php echo get_blog_details( 1 ) -> siteurl; ?>">
                <img class="brand-image" src="<?php bloginfo('template_directory')?>/img/cm_logo_80px.png" alt="<?php bloginfo('title'); ?>" />
            </a>
-->
        </section><!-- /.navbar-header -->

        <section id="navbar" class="collapse navbar-collapse">

		<?php 
			/*
				$preMenuLinkBlogImage = '';
				if (get_theme_mod( 'themeslug_logo')) {
					$preMenuLinkBlogImage = '<img src="' . esc_url( get_theme_mod( 'themeslug_logo' ) ) . '" class="blog-image" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
				}
			*/
			$blogMenuItems = wp_get_nav_menu_items('primary');

			$menu_name = 'primary';
 
			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
			
				$menu_items = wp_get_nav_menu_items($menu->term_id);
			
				$menu_list = '<ul id="menu-' . $menu_name . '" class="nav navbar-nav">';
			
				foreach ( (array) $menu_items as $key => $menu_item ) {
					// check for blog
					$blogId = null;
					$blogSlug = null;

					if (strpos($menu_item->url, 'campusradio-jena.de')) {
						$blogId = 5;
						$blogSlug = 'cr';
					}
					
					if (strpos($menu_item->url, 'campustv-jena.de')) {
						$blogId = 4;
						$blogSlug = 'ctv';
					}
					
					if (strpos($menu_item->url, 'akruetzel.de')) {
						$blogId = 2;
						$blogSlug = 'ak';
					}

					$preMenuLinkBlogImage = '';
					/*
					switch_to_blog($blogId);
						debug_to_console(get_theme_mod( 'themeslug_logo' ));
						if (get_theme_mod( 'themeslug_logo')) {
							$preMenuLinkBlogImage = '<img src="' . esc_url( get_theme_mod( 'themeslug_logo' ) ) . '" class="blog-image" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '">';
						}
					restore_current_blog();
					*/
					
					$title = $menu_item->title;
					$url = $menu_item->url;
					$activeClass = $currentBlogID === $blogId ? ' active' : ''; // use blog id
					
					$menu_list .= '<li class="blog-' . $blogSlug . $activeClass . '"><a href="' . $url . '">' /*. $preMenuLinkBlogImage */ . $title . '</a></li>';
				}
				$menu_list .= '</ul>';
			} else {
				$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
			}

			echo $menu_list;
				
			?>
        </section><!--/.navbar-collapse -->
    </div>
</nav>


	<!-- LOWER NAVBAR -->
	<nav class="navbar navbar-default navbar-lower hidden-xs"
		role="navigation">
		<div class="container">
			<div class="collapse navbar-collapse collapse-buttons">
				<section class="navbar-header">
				<div class="row">
					<div class="pull-left">
				<?php
				wp_nav_menu ( array (
						'container' => false,
						'theme_location' => 'secondary',
						'menu_class' => 'nav navbar-nav' 
				) );
				?>
					</div>
					<div class="pull-right">
						<form action="<?php echo home_url('/'); ?>" method="get" class="form-inline">
							<!--		    <fieldset> -->
							<div class="input-group search-form">
								<input type="search" name="s" id="search" placeholder="Search"
									value="<?php the_search_query(); ?>" class="form-control"
									title="Search" /> <span class="input-group-btn">
									<button type="submit" id="search-btn" class="btn btn-default">
										<span class="glyphicon glyphicon-search gi-1-4x"></span>
									</button>
								</span>
							</div>
							<!--		    </fieldset> -->
						</form>
					</div>
				</div>
				</section>
			</div>
		</div>
	</nav>

	<nav class="navbar-mobile visible-xs" role="navigation">
	<?php wp_nav_menu( array(
		'container' => false,
		'theme_location' => 'secondary',
		'menu_class' => 'nav nav-pills',
		'depth' => 1
		) ); 
	?>
</nav>