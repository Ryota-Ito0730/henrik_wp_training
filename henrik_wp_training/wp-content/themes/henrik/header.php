<!DOCTYPE html>
<html lang="ja">
<?php
// initialここから----------------------------------------------------------------------------------------------------
// 各ファイルへの絶対パス------------------------
function echo_absolute_path()
{
  // $absolute_path = get_template_directory_uri() . '/';
  $absolute_path = esc_url(get_template_directory_uri() . '/');
  echo $absolute_path;
}
// ページURL設置------------------------
function echo_page_url()
{
  $page_url = esc_url(home_url('/'));
  echo $page_url;
}
// initialここまで----------------------------------------------------------------------------------------------------
?>

<head prefix="og:http://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:site_name" content="リラクゼーションサロン・ヘンリック">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://intp.site/221/Henrik_rwd/index.html">
  <meta property="og:image" content="https://intp.site/221/Henrik_rwd/img/henrik_og.png">
  <link rel="icon" href="<?php echo_absolute_path(); ?>/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo_absolute_path(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo_absolute_path(); ?>/css/effect.css">
  <?php wp_head(); ?>
</head>
<!-- topページのふるい分けに使う↓ -->
<?php if (is_home()) : ?>

  <body id="top">
    <!-- 特定の投稿ページのふるいわけに使う↓ -->
  <?php elseif (is_single('covid19')) : ?>

    <body id="covid19">
      <!-- 特定の固定ページのふるいわけに使う↓ -->
    <?php elseif (is_page('massage')) : ?>

      <body id="massage">

      <?php elseif (is_post_type_archive('stuff')) : ?>

        <body id="stuff">
          <!-- カスタム投稿のふるい分けに使う↓ -->
        <?php elseif (is_post_type_archive('course')) : ?>

          <body id="course">

          <?php elseif (is_page('contact')) : ?>

            <body id="contact">

            <?php elseif (is_page('reservation')) : ?>

              <body id="reservation">

              <?php elseif (is_page('roots')) : ?>

                <body id="roots">

                <?php endif; ?>
                <header>
                  <div class="inner">
                    <div class="logo smooth">
                      <a href="index.html">
                        <img src="<?php echo_absolute_path(); ?>img/logo.svg" alt="スウェディッシュマッサージで最高の癒しを提供するリラクゼーションサロン・ヘンリック">
                      </a>
                    </div>
                    <nav>
                      <div class="menu_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                      <div class="pc_menu_body">
                        <ul>
                          <li><a href="<?php echo_page_url(); ?>">TOP</a></li>
                          <li><a href="<?php echo_page_url(); ?>roots">Henrikができるまで</a></li>
                          <li><a href="<?php echo_page_url(); ?>massage">スウェディッシュマッサージについて</a></li>
                          <li><a href="<?php echo_page_url(); ?>course">コースのご案内</a></li>
                          <li><a href="<?php echo_page_url(); ?>stuff">スタッフ紹介</a></li>
                          <li><a href="<?php echo_page_url(); ?>contact">お問い合わせ</a></li>
                        </ul>
                      </div>
                      <div class="sp_menu_body">
                        <ul class="smooth">
                          <li class="smooth"><a href="<?php echo_page_url(); ?>">TOP</a></li>
                          <li class="smooth"><a href="<?php echo_page_url(); ?>roots">Henrikができるまで</a></li>
                          <li class="smooth"><a href="<?php echo_page_url(); ?>massage">スウェディッシュマッサージ<br class="mb_style_2">について</a></li>
                          <li class="smooth"><a href="<?php echo_page_url(); ?>course">コースのご案内</a></li>
                          <li class="smooth"><a href="<?php echo_page_url(); ?>stuff">スタッフ紹介</a></li>
                          <li class="smooth"><a href="<?php echo_page_url(); ?>contact">お問い合わせ</a></li>
                          <li class="smooth res_link"><a href="<?php echo_page_url(); ?>reservation">ご予約</a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
                </header>
                <a class="res_btn smooth" href="<?php echo_page_url(); ?>reservation">ご予約</a>