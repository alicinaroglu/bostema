<?php 
function bos_setup() {
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
register_nav_menu( 'primary', __( 'Ana Menü', 'bos' ) );
	
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 604, 270, true );

add_filter( 'use_default_gallery_style', '__return_false' );

}
add_action( 'after_setup_theme', 'bos_setup' );

function bos_scriptler_stiller() {
	
//Css Dosyaları	
wp_enqueue_style( '', get_template_directory_uri() . '', array() );

wp_enqueue_style( 'bos-style', get_stylesheet_uri(), array() );
  
//Js Dosyaları

wp_enqueue_script( '', get_template_directory_uri() . '', array( 'jquery' ), '', true );	
	
	
add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css' ) );
	
}

add_action( 'wp_enqueue_scripts', 'bos_scriptler_stiller' );




//Gutenberg Devre Dışı
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
add_filter('use_widgets_block_editor', '__return_false');



