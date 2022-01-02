<?php get_header('stuff'); ?>


<?php
$stuff_post_ids = ['69', '72', '74', '76'];
$args = [
  'post_type' => 'stuff',
  'post__in' => $stuff_post_ids,
  'orderby' => 'post__in',
  'posts_per_page' => -1 // 全件取得
];
$querys = new WP_Query($args);
?>

<div class="breadcrum clearfix" id="under_bread_wrapp">
  <ul>
    <li><a href="index.html">TOP</a></li>
    <li>></li>
    <li>スタッフ紹介</li>
  </ul>
</div>
<main>
  <section class="stuff_title">
    <h1>スタッフ紹介</h1>
    <p>当サロンで働く個性的かつ、日々熱心に施術に取り組むスタッフをご紹介いたします。少しでも身近に感じていただければ幸いです。
    </p>
  </section>

  <?php if ($querys->have_posts()) : while ($querys->have_posts()) : $querys->the_post(); ?>
      <section class="stuff_introduction">
        <div class="stuff_name">
          <h1><?php echo get_post_meta($post->ID, 'スタッフの役職', true); ?> <?php echo get_post_meta($post->ID, 'スタッフの名前', true); ?></h1>
        </div>
        <div class="clearfix stuff_wrapp">
          <div class="stuff_img">
            <?php
            // 各記事のサムネイルに登録済みalt属性の情報を取得
            $thumbID = get_post_thumbnail_id();
            $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
            ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
            <!-- ヘンリックトップの画像を実験的に出力 ------------------------------------>
            <!-- <img src="<?php wp_get_attachment_image(get_post_meta($post->ID, 'スタッフ画像', true)); ?>">
            <?php var_dump(wp_get_attachment_image_src(get_post_meta($post->ID, 'スタッフ画像', true), false, false)[0]); ?> -->


          </div>
          <div class="stuff_prf">
            <ul>
              <li><?php echo get_post_meta($post->ID, 'プロフィール1', true); ?></li>
              <li><?php echo get_post_meta($post->ID, 'プロフィール2', true); ?></li>
              <li><?php echo get_post_meta($post->ID, 'プロフィール3', true); ?></li>
            </ul>
          </div>
        </div>
        <div class="stuff_comment">
          <p><?php echo get_post_meta($post->ID, 'プロフィール', true); ?></p>
        </div>
      </section>
  <?php endwhile;
  endif; ?>
  <?php wp_reset_query(); ?>
</main>
<div class="img_logo smooth">
  <img src="<?php echo get_template_directory_uri(); ?>/img/skelton_logo.svg" alt="スウェディッシュマッサージで最高の癒しを提供するリラクゼーションサロン・ヘンリック">
</div>
<div class="top_scroll" id="to_top">
  <a href="#top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top_scroll.png" alt="">TOP</a>
</div>


<?php get_footer(); ?>