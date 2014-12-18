<?php

function lowermedia_add_favicon() {
	$favicon_url = get_stylesheet_directory_uri().'/favicon.ico';
	echo '<link rel="shortcut icon" href="'.$favicon_url .'" />';
}
add_action('admin_head', 'lowermedia_add_favicon');
add_action('wp_head', 'lowermedia_add_favicon');

/*
#
#   SPEED OPTIMIZATIONS
#   -Load all fonts from google
#
#
*/

    function load_fonts() {
        wp_dequeue_style( 'twentytwelve-fonts' );
        wp_deregister_style( 'twentytwelve-fonts' );
        wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:400,900|Kite+One|Signika:400,700|Open+Sans:400italic,700italic,400,700');
        wp_enqueue_style( 'googleFonts');
        wp_register_style('googleFontsTwo', 'http://fonts.googleapis.com/css?family=Alex+Brush:400|Scada:700|Scada:400&amp;subset=latin');
        wp_enqueue_style( 'googleFontsTwo');
    }
    add_action('wp_head', 'load_fonts');
?>