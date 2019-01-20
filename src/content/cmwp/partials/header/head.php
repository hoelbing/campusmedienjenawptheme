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
