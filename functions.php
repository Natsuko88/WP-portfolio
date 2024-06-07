<?php
add_theme_support( 'post-thumbnails' );//アイキャッチ画像の表示
add_theme_support( 'automatic-feed-links' );//フィード以下テーマチェックで追加
add_theme_support( "title-tag" );
add_theme_support( "wp-block-styles" ) ;
add_theme_support( "responsive-embeds" );
add_theme_support( 'html5', array(
    // Any or all of these.
    'comment-list', 
    'comment-form',
    'search-form',
    'gallery',
    'caption',
) );
add_theme_support( "custom-logo");
add_theme_support( "align-wide" );
add_theme_support( "custom-background");


function natsukosportfolio_script(){
    wp_enqueue_style('ress','https://unpkg.com/ress/dist/ress.min.css',array());
    wp_enqueue_style('nportfolio',get_template_directory_uri().'/css/style.css',array(),'1.0.0'); 
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    wp_enqueue_style('m+1','https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',array());
    wp_enqueue_style('swiperst','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',array());
    wp_enqueue_style('fontawesome',get_template_directory_uri(). '/css/all.min.css',array());
	wp_enqueue_script('mjs',get_template_directory_uri().'/js/main.js',array(),'1.0.0',true);
    wp_enqueue_script('swiperjs','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',array(),true);
}
add_action('wp_enqueue_scripts','natsukosportfolio_script');

function natsukosportfolio_theme_setup(){
    load_theme_textdomain( 'natsukosportfolio', get_template_directory() . '/languages' );
    }
add_action( 'after_setup_theme', 'natsukosportfolio_theme_setup' );

//アーカイブ
function post_has_archive($args, $post_type){
    if('post'== $post_type){
      $args['rewrite']=true;
      $args['has_archive']='post';
    }
    return $args;
  }
  
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);