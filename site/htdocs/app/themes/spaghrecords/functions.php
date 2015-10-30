<?php

	if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
	
	
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );  

function new_excerpt_length($length) {
	return 39;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_post_type_support('page', 'excerpt');

?>