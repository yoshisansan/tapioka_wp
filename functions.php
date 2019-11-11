<?php 
//カスタム投稿タイプ
function create_post_type() {
  register_post_type(
  'shopmenu', //投稿タイプ名
  array(
    'label' => '商品メニュー',
    'labels' => array(
       'all_items' => '商品メニューの一覧',
       ),
    'description' => '商品メニューの一覧です',
    'public' => true,
    'has_archive' => true,
    'supports' => array( //投稿編集画面内の機能を引き出す
      'title',
      'editor',
      'author',
      'custom-fields',
      ),
  )
    );
}
add_action( 'init', 'create_post_type' );


function register_stylesheet() { 
  wp_register_style('style', get_template_directory_uri().'/css/style.css'); 
  wp_register_style('reset', get_template_directory_uri().'/css/reset.css'); 
  wp_register_style('font', 'https://fonts.googleapis.com/css?family=M+PLUS+1p'); 
}
function add_stylesheet() { 
    register_stylesheet(); 
    wp_enqueue_style('reset', '', array(), '1.0', false); 
    wp_enqueue_style('font', '', array(), '1.0', false); 
    wp_enqueue_style('style', '', array(), '1.0', false); 
} 

add_action('wp_enqueue_scripts', 'add_stylesheet');