<?php
function subzane_shorturl($atts) {
	extract(shortcode_atts(array(
		'url' => '',
		'name' => '',
), $atts));
$request = 'http://u.nu/unu-api-simple?url=' . urlencode($url);
$short_url = file_get_contents($request);
	if (substr($short_url, 0, 4) == 'http')    {
		$name = empty($name)?$short_url:$name;
		return '<a href="'.$short_url.'">'.$name.'</a>';
	} else {
		$name = empty($name)?$url:$name;
		return '<a href="'.$url.'">'.$name.'</a>';
	}
}
add_shortcode('shorturl', 'subzane_shorturl');

add_theme_support('automatic-feed-links');
add_theme_support('post-formats',array('aside','gallery'));
add_custom_background();

register_sidebar(array(
	'name' => __( 'Twitter' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

register_sidebar(array(
	'name' => __( 'Posts' ),
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3 class="h-list">',
	'after_title' => '</h3>',
));

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'primary', 'Primary Navigation' );
}

?>