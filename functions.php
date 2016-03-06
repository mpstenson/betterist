<?php
//Give the theme featured images
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'video', 'status' ) );
//Register the main menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//Limit excerpt length
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//get rid of [..] thing in excerpt
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//function word_count() {
//    $content = get_post_field( 'post_content', $post->ID );
//    $word_count = str_word_count( strip_tags( $content ) );
//    return $word_count;
//}
//function reading_length() {
//    $reading_length = ceil(wordcount() / 250);
//    return $reading_length;
//}
?>
