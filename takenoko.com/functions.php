<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
wp_enqueue_style('drawer', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', array(), '1.0.0', 'all and (max-width: 768px)');

wp_enqueue_script('ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array( 'jquery' ));
wp_enqueue_script('scroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array( 'jquery' ));
wp_enqueue_script('drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array( 'jquery' ));
wp_enqueue_script('wow', get_template_directory_uri(). '/js/wow.min.js', array( 'jquery' ));
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ));
}
add_action('wp_enqueue_scripts', 'my_script_init');


