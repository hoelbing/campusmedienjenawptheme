<?php
/**
 * Theme Name child theme functions and definitions
 */

/*—————————————————————————————————————————*/
/* Include the parent theme style.css
/*—————————————————————————————————————————*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

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