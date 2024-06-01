<?php
add_theme_support( 'post-thumbnails' );//アイキャッチ画像の表示

function natsukosportfolio_script(){
    wp_enqueue_style('ress','https://unpkg.com/ress/dist/ress.min.css',array());
    wp_enqueue_style('nportfolio',get_template_directory_uri().'/css/style.css',array(),'1.0.0'); 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style('m+1','https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',array());
    wp_enqueue_style('swiperst','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',array());
    wp_enqueue_script('mjs',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
    wp_enqueue_script('swiperjs','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',array(),true);
}
add_action('wp_enqueue_scripts','natsukosportfolio_script');

function add_post_type_event() {
	register_post_type(
		'works', /* カスタム投稿タイプのスラッグ */
		array(
			'labels'       => array(
				'name' => 'works',
			),
			'public'       => true,
			'has_archive'  => true,
			'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'add_post_type_event', 0 );