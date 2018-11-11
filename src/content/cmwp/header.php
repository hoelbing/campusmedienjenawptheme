<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>
        <?php wp_title('-', true, 'left'); ?>
    </title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta http-equiv="pragma" content="no-cache">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

    <link type="application/atom+xml" rel="alternate" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>">
    <link rel="pingback" href="<?php bloginfo ('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>
<?php

$blog_array = array(
    array ('title' => 'campusMedien', 'url' => 'https://www.campusmedien-jena.de', 'blogID' => '6', 'slug' => 'cm'),
    array ('title' => 'Campusradio Jena', 'url' => 'https://www.campusradio-jena.de', 'blogID' => '5', 'slug' => 'cr'),
    array ('title' => 'CampusTV Jena', 'url' => 'https://www.campustv-jena.de', 'blogID' => '4', 'slug' => 'ctv'),
    array ('title' => 'Akruetzel', 'url' => 'https://www.akruetzel.de', 'blogID' => '2', 'slug' => 'ak')
);
$currentBlogID = get_current_blog_id();
//$blogArray = wp_get_sites();

?>

<body <?php body_class([ 'blog-' . $currentBlogID]); ?> >
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
            <div class="container">
                <button
                    class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-12"
                    aria-controls="bs-example-navbar-collapse-12"
                    aria-expanded="false"
                    aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <?php if (get_theme_mod( 'themeslug_logo' )) : ?>
                    <img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display ' ) ); ?>' width="25" height="25">
                    <span class="blogname-title">
                        <?php echo trim(get_bloginfo( 'name' )); ?>
                    </span>
                    <?php else : ?>
                    <div class="blogname-title-alone">
                        <?php echo trim(get_bloginfo( 'name' )); ?>
                    </div>
                    <?php endif; ?>
                </a>
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary-menu',
                        'depth'             => 4,
                        'container'         => div, //'div', false
                        'container_class'   => 'primary-header-menu collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-12',
                        'menu_class'        => 'navbar-nav mr-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
                    ?>
                <!-- </div> -->
                <form action="<?php echo home_url('/'); ?>" method="get" class="form-inline search-form my-2 my-lg-0">
                    <input
                        type="search"
                        class="form-control search-field mr-sm-2"
                        placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                        aria-label="Search"
                        value="<?php the_search_query(); ?>"
                        name="s"
                        title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>"
                    />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </nav>
    </header>
