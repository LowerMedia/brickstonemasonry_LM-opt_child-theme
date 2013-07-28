<?php

function lowermedia_add_admin_favicon() {
	$favicon_url = get_stylesheet_directory_uri().'/favicon.ico';
	echo '<link rel="shortcut icon" href="'.$favicon_url .'" />';
}
add_action('admin_head', 'lowermedia_add_favicon');
add_action('wp_head', 'lowermedia_add_favicon');

?>