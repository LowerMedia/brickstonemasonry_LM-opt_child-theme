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

    // function lowermedia_load_fonts() {
    //     //wp_dequeue_style( 'open-sans' );
    //     //wp_deregister_style( 'open-sans' );
    //     wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Alex+Brush:400|Lato:400,900|Kite+One|Scada:700,400&amp;subset=latin|Signika:400,700|Open+Sans:400italic,700italic,400,700');
    //     wp_enqueue_style( 'googleFonts');
    // }
    // add_action('wp_print_styles', 'lowermedia_load_fonts');
?>