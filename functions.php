<?php


//Menue in Header and Footer
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(array('header-menu' => __('Header Menu'),
							'footer-menu' => __('Footer Menu')));
}





//enable SVG
function kb_svg ( $svg_mime ){
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}
add_filter( 'upload_mimes', 'kb_svg' );




?>