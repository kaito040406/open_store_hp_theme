<?php
// ローカル環境にて、FTP認証画面を出さない処理
if (@$_SERVER["SERVER_NAME"] === 'localhost') {
  function set_fs_method($args)
  {
    return 'direct';
  }
  add_filter('filesystem_method', 'set_fs_method');
}

//投稿にアイキャッチ画像を追加できるように設定
add_theme_support('post-thumbnails');


// カスタム投稿の設定 strat 長谷川
add_action('init', 'create_post_type');
function create_post_type()
{
  // ニュース投稿(日本語)
  register_post_type('works', [ // 投稿タイプ名の定義
    'labels' => [
      'name' => '実績', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'works', // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublic
    'has_archive'   => true, // アーカイブ機能ON
    'show_in_rest'  => true,  // Gutenbergを有効にする
    'supports' => array('title', 'editor', 'thumbnail'), //アイキャッチ画像を有効にする
  ]);
  // ニュース投稿(英語)
  register_post_type('news', [ // 投稿タイプ名の定義
    'labels' => [
      'name'      => 'お知らせ', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'news',    // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublic
    'has_archive'   => true, // アーカイブ機能ON
    'show_in_rest'  => true,  // Gutenbergを有効にする
    'supports' => array('title', 'editor', 'thumbnail'), //アイキャッチ画像を有効にする
  ]);
}
// カスタム投稿の設定 end 長谷川