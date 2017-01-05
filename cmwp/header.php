<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('-', true, 'left'); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
	<meta http-equiv="pragma" content="no-cache">

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.min.css">
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

	<link type="application/atom+xml" rel="alternate" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">
	<link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>
<?php

$blog_array = array(
	array ('title' => 'campusMedien', 'url' => 'https://www.campusmedien-jena.de', 'blogID' => '6', 'slug' => 'cm'),
	array ('title' => 'CampusTV Jena', 'url' => 'https://www.campustv-jena.de', 'blogID' => '4', 'slug' => 'ctv'),
	array ('title' => 'Campusradio Jena', 'url' => 'https://www.campusradio-jena.de', 'blogID' => '5', 'slug' => 'cr'),
	array ('title' => 'Akruetzel', 'url' => 'https://www.akruetzel.de', 'blogID' => '2', 'slug' => 'ak')
);
$currentBlogID = get_current_blog_id();
//$blogArray = wp_get_sites();

?>
<body <?php body_class(['blog-' . $currentBlogID]); ?> >

<div class="hidden-xs">
	<nav class="navbar navbar-default navbar-primary navbar-fixed-top" role="navigation">
	    <div id="navbarAllMedien" class="container">

	        <section id="navbar-1" class="collapse navbar-collapse">

					<ul class="nav navbar-nav">
					<?php
						foreach ( $blog_array as $blog ) {
							$currentBlogIsActivStatus = '';// default is empty
							if ($currentBlogID == $blog['blogID'])
							{
								$currentBlogIsActivStatus = ' active';
							}
							echo '<li id="menu-blogs-' . $blog['blogID'].'" class="blog-' . $blog['blogID'] . $currentBlogIsActivStatus . '"><a href="' . $blog['url'] . '">' . $blog['title'] . '</a></li>'."\n";
						}
						echo '</ul>';
					?>
	        </section><!--/.navbar-collapse -->
	    </div>
	</nav>
</div>

	<!-- LOWER NAVBAR -->
	<nav class="navbar navbar-default navbar-lower" role="navigation">

		<div id="navbarMedienCategories" class="container">

      <div class="navbar-header visible-xs">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
					<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
							<img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' width="25" height="25">
							<span class="blogname-title"><?php echo trim(get_bloginfo( 'name' )); ?></span>
					<?php else : ?>
						<div class="blogname-title-alone"><?php echo trim(get_bloginfo( 'name' )); ?></div>
					<?php endif; ?>
				</a>
      </div>

			<div id="navbar" class="navbar-collapse collapse">
				<div class="container">
					<div class="col-xs-12 col-sm-8">
						<div>
							<?php
							// um den unterpunkt 'andere Campusmedien' anzufuegen
							$items_wrap = '<ul class="visible-xs">';
							foreach ( $blog_array as $blog ) {
								$currentBlogIsActivStatus = '';// default is empty
								if ($currentBlogID == $blog['blogID'])
								{
									$currentBlogIsActivStatus = ' active';
								}
								$items_wrap .=  '<li class="blog-' . $blog['blogID'] . $currentBlogIsActivStatus . '"><a href="' . $blog['url'] . '">' . $blog['title'] . '</a></li>'."\n";
							}
							$items_wrap .= "</ul>";

							wp_nav_menu ( array (
								//'menu'              => 'primary',
								'theme_location'    => 'secondary',
								'depth'             => 2,
								'container'         => false,//'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'main-navbar-collapse',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker(),

							) );
							/* @TODO eine list mit den anderen Campusmedien ausgeben
							wp_nav_menu ( array (
								'items_wrap'				=> $items_wrap,
							) );
							*/
							?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="pull-right">
							<form action="<?php echo home_url('/'); ?>" method="get" class="form-inline form-search">
								<div class="input-group">
									<input type="search" name="s" id="search" placeholder="Search"
										value="<?php the_search_query(); ?>" class="form-control"
										title="Search" /> <span class="input-group-btn">
										<button type="submit" id="search-btn" class="btn btn-default">
											<span class="glyphicon glyphicon-search gi-1-4x"></span>
										</button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
