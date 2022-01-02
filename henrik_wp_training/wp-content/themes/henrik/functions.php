<?php
// 管理画面上部のバーを全ユーザー分一括非表示
add_filter('show_admin_bar', '__return_false');

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

// コンテンツ出力時,抜粋出力時にpやbrの自動生成をさせないようにする
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');


// webp,svgのアップロード許可
// 下記設定済みでもsvgファイルがアップロード出来ない場合、下記タグがsvgファイルの先頭に設置されているか確認する
// < ?xml version="1.0" encoding="UTF-8"? >
//※設置時に左右の<>と?マークの間は詰める
function custom_mime_types($mimes)
{
  $mimes['webp'] = 'image/webp';
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');
