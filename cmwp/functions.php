<?php
/* Datei Upload Größe */
@ini_set( 'upload_max_size' , '50M' );
@ini_set( 'post_max_size', '50M');
@ini_set( 'max_execution_time', '300' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/* Custom-Logo für Login-Seite */
function my_custom_login_logo() {
	//echo '<style type="text/css"> h1 a { background-image:url('.get_bloginfo('template_directory').'/img/cm_logo_80px.png) !important; background-size: 80px 107px !important; height: 107px !important; } </style>';
}
add_action('login_head', 'my_custom_login_logo');

/* Entferne Wordpress-Version aus Quellcode */
remove_action('wp_head', 'wp_generator');

/* Blog Logo */

function themeslug_theme_customizer( $wp_customize ) {
	// Logo
    $wp_customize->add_section( 'themeslug_theme_section' , array(
		'title'       => __( 'Theme Einstellungen', 'themeslug' ),
		'priority'    => 30,
		'description' => 'Setze die individuellen Einstellungen für das Medium.',
	) );

	$wp_customize->add_setting( 'themeslug_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		'label'    => __( 'Logo', 'themeslug' ),
		'section'  => 'themeslug_theme_section',
		'settings' => 'themeslug_logo',
	) ) );

	// Brand color
	$wp_customize->add_setting( 'themeslug_accentcolor' );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'themeslug_accentcolor', array(
		'label'    => __( 'Akzentfarbe', 'themeslug' ),
		'section'  => 'themeslug_theme_section',
		'settings' => 'themeslug_accentcolor',
	) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );


//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';

    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li><span",$out);
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);
    $out = str_replace("<span class='current'","<li class='active'><span",$out);

    return '<ul class="pagination pagination-centered">
            '.$out.'</ul>
        ';
}
//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );


//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
  }
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info and twitter
function insert_socialmedia_in_head() {
  global $post;

  if( is_single() ) {

    $post_id = $post->ID;
    $blog_post_title = html_entity_decode(get_the_title($post_id));
    $blog_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
    $blog_post_url = get_permalink();
    $blog_post_desc = substr(strip_tags(apply_filters('the_content', $post->post_content)),0,150);
    $blog_site_name = get_bloginfo( 'name', 'display' );

    echo "\n";
    // facebook
    echo '<meta property="og:type" content="article"/>'."\n";
    echo '<meta property="og:title" content="' . $blog_post_title . '"/>'."\n";
    echo '<meta property="og:url" content="' . $blog_post_url . '"/>'."\n";
    echo '<meta property="og:site_name" content="' . $blog_site_name .  '"/>'."\n";
    echo '<meta property="og:description" content="' . $blog_post_desc .  '"/>'."\n";

    // zwischen beide
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
      $default_image="http://example.com/image.jpg"; //replace this with a default image on your server or an image in your media library
      //echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
      $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
      //fb
      echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>'."\n";
      //twitter
      echo '<meta property="twitter:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>'."\n";
    }
    // twitter
    echo '<meta name="twitter:title" content="' . $blog_post_title . '" />'."\n";
    echo '<meta name="twitter:url" content="' . $blog_post_url . '" />'."\n";

  }
  echo "
";
/*
*/
}
add_action('wp_head', 'insert_socialmedia_in_head');

/* Responsive Wrapper für Embeds */
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}

/* Deaktiviere die 'Read More'-Sprungmarke */
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) { $end = strpos($link, '"',$offset); }
	if ($end) { $link = substr_replace($link, '', $offset, $end-$offset); }
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

/* Thumbnails für Beiträge */
add_theme_support( 'post-thumbnails' );

/* Thumbnail Größen */
add_image_size('split-screen-thumbnail', 130, 130, array( 'center', 'center' ));
add_image_size('full-width-thumbnail', 926);
add_image_size('full-width-cinema-header', 1200, 500, array( 'center', 'center' ));
add_image_size('cinema-thumbnail', 380);
add_image_size('ausgabe-thumbnail', 200, 280, array( 'center', 'center' ));

/* Infinite Scroll */
/*add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );
*/

/* Schalte die Admin Bar im Frontend aus */
//show_admin_bar( false );

/* Formatted custom title
* from: https://developer.wordpress.org/reference/hooks/wp_title/
*/
/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $titleNew = $bloginfoName = get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $bloginfoDescription = get_bloginfo( 'description', 'display' );

    if ( $site_description && ( is_home() || is_front_page() ) )
        $titleNew = $bloginfoName . " ".  $sep . " " . $bloginfoDescription;

    if ( is_single() )
        $titleNew = $bloginfoName . " ".  $sep . " " . get_the_title();

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $titleNew = $bloginfoName . " ".  $sep . " " . sprintf( _( 'Seite %s' ), max( $paged, $page ) );

    return $titleNew;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );

/* Registriere Menus */
register_nav_menus( array(
    'primary' => __( 'Hauptmenü', 'cmwp'),
	'secondary' => __( 'Untermenü', 'cmwp'),
    'third' => __( 'Footer Menu Campusmedien', 'cmwp' ),
    'fourth' => __( 'Footer Menu Campusradio', 'cmwp' ),
    'fifth' => __( 'Footer Menu Akrützel', 'cmwp' ),
    'sixth' => __( 'Footer Menu Campus.tv', 'cmwp' )
 ) );

/* Breadcrumb Function */
function the_breadcrumb() {
	if (!is_home()) {
		echo '<i class="fa fa-home"></i><a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> » ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " » ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	} else {
		echo '<i class="fa fa-home"></i> <a href="' . get_bloginfo('url') . '" title="' . get_bloginfo('name') . '"> ' . get_bloginfo('name') . '</a>';
	}
}

/* post kriegt Herkunft Blog id */
add_action('publish_page', 'add_custom_field_automatically');
add_action('publish_post', 'add_custom_field_automatically');
function add_custom_field_automatically($post_ID) {
	global $wpdb;
	if(!wp_is_post_revision($post_ID)) {
		add_post_meta($post_ID, 'origin_blog_id', get_current_blog_id(), true);
	}
}

// init Widgetareas
function cmwp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Allgemeine Sidebar', 'cmwp' ),
		'id'            => 'general_sidebar',
		'description'   => __( 'Der Standard Sidebar für Widgets', 'cmwp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footerbar', 'cmwp' ),
		'id'            => 'footer_bar',
		'description'   => __( 'Das Footerbar für Widgets', 'cmwp' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'cmwp_widgets_init' );



//add checkbox to thumbnail widget
add_filter( 'admin_post_thumbnail_html', 'wpse_71501_thumbnail_options' );

function wpse_71501_thumbnail_options( $html )
{
	if (isset($GLOBALS['post'])) {
		$value_big_thumbnail = get_post_meta($GLOBALS['post']->ID, 'big_thumbnail', true);
	} else {
		$value_big_thumbnail = '';
	}

	if (isset($GLOBALS['post'])) {
		$value_cinema_thumbnail = get_post_meta($GLOBALS['post']->ID, 'cinema_thumbnail', true);
	} else {
		$value_cinema_thumbnail = '';
	}

	if (isset($GLOBALS['post'])) {
		$value_copyright_image = get_post_meta($GLOBALS['post']->ID, 'copyright_image', true);
	} else {
		$value_copyright_image = '';
	}

    return $html . <<<html
<p>
	<label for="copyright_image">
		<input id="copyright_image" name="copyright_image" type="text" placeholder="Name oder Webseite" value="
html
		. $value_copyright_image . <<<html
"/>
		<!--Copyright Inhaber-->
	</label>
</p>

<p>

<p>
	<label for="big_thumbnail">
		<input id="big_thumbnail" name="big_thumbnail" type="checkbox" value="1"
html
		. ($value_big_thumbnail ? ' checked="checked"' : '') .  <<<html
/>
		Thumbnail volle Breite (Feed)
	</label>
</p>

<p>
	<label for="cinema_thumbnail">
		<input id="cinema_thumbnail" name="cinema_thumbnail" type="checkbox" value="1"
html
		. ($value_cinema_thumbnail ? ' checked="checked"' : '') .  <<<html
/>
		Cinema Header (Einzelansicht)
	</label>
</p>
html;
}

add_action( 'save_post', 'save_thumbnail_option', 10, 1 );

function save_thumbnail_option($post_id) {
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* OK, it's safe for us to save the data now. */

	// Make sure that it is set.
	if( isset( $_POST[ 'big_thumbnail' ] ) ) {
		update_post_meta( $post_id, 'big_thumbnail', 'yes' );
	} else {
		update_post_meta( $post_id, 'big_thumbnail', '' );
	}

	// Make sure that it is set.
	if( isset( $_POST[ 'cinema_thumbnail' ] ) ) {
		update_post_meta( $post_id, 'cinema_thumbnail', 'yes' );
	} else {
		update_post_meta( $post_id, 'cinema_thumbnail', '' );
	}

	// Make sure that it is set.
	if( isset( $_POST[ 'copyright_image' ] ) ) {
		update_post_meta( $post_id, 'copyright_image', sanitize_text_field( $_POST[ 'copyright_image' ] ) );
	}
}

/* SCRIPTS */

/**
 * Proper way to enqueue scripts and styles
 */
function cmwp_scripts() {
	wp_dequeue_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array(), '1.11.1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'all', get_template_directory_uri() . '/js/all.js', array(), '', true );
}

add_action( 'init', 'cmwp_scripts' );

wp_register_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js' );


/* WPBROADCAST MANIPULATION, dirty but necessary */

function my_enqueue($hook) {
    if ( 'post.php' != $hook && 'post-new.php' != $hook && is_main_site() == false) {
        return;
    }

    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin-wpbroadcast.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'my_enqueue' );

/*
 Sourcecode von:
 http://www.smart-webentwicklung.de/2012/08/wordpress-artikel-views-anzeigen-ohne-plugin/
 echo Post_Views::increment_post_views(get_the_ID());

 //ausgabe
 echo Post_Views::get_post_views(get_the_ID());

 //Top-3 der meistgelesenen Artikel anzeigen
 echo get_popular_posts_by_views(3);

 */
class Post_Views
{
	const KEY = 'post_views_count';

	private static function get_post_views_count($post_id)
	{
		return get_post_meta($post_id, self::KEY, true);
	}

	public static function get_post_views($post_id)
	{
		$count = self::get_post_views_count($post_id);
		$count = $count === '' ? 0 : $count;
		return sprintf(_n('%d Aufruf', '%d Aufrufe', $count), $count);
	}

	public static function increment_post_views($post_id)
	{
		$count = self::get_post_views_count($post_id);
		if($count === '')
		{
			delete_post_meta($post_id, self::KEY);
			add_post_meta($post_id, self::KEY, '0');
		}
		else
		{
			$count++;
			update_post_meta($post_id, self::KEY, $count);
		}
	}
}

?>
