<?php get_header('course'); ?>
<?php
$course_post_ids = ['110', '112', '113', '114'];
$args = [
  'post_type' => 'course',
  'post__in' => $course_post_ids,
  'orderby' => 'post__in',
  'posts_per_page' => -1 // 全件取得
];
$querys = new WP_Query($args);
?>
<div class="breadcrum clearfix" id="under_bread_wrapp">
  <ul>
    <li><a href="index.html">TOP</a></li>
    <li>></li>
    <li>コースのご案内</li>
  </ul>
</div>
<main>
  <section class="course_title">
    <h1>コースのご案内</h1>
    <p>当サロンのマッサージコースのご紹介をいたします。お客様のコンディションに合わせてお選びいただければ幸いです。
    </p>
  </section>
  <!-- ループ開始 -->
  <?php if ($querys->have_posts()) : while ($querys->have_posts()) : $querys->the_post(); ?>
      <?php if ($post->ID == $course_post_ids[0]) : ?>
        <div class="course_fl_wrapper">
          <section class="course_introduction">
            <div class="course_name">
              <h1><?php echo get_the_title($post->ID); ?></h1>
            </div>
            <div class="clearfix course_wrapp">
              <div class="course_img">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($post->ID, 'コースのイメージ1', true), false, false)[0]; ?>" alt="<?php echo get_post_meta($post->ID, 'コースのイメージ1_alt属性', true); ?>">
              </div>
              <div class="course_prf">
                <ul>
                  <?php echo get_post_meta($post->ID, 'course_time_prise', true); ?>
                </ul>
              </div>
            </div>
            <div class="course_comment">
              <p><?php echo get_post_meta($post->ID, 'コースの説明', true); ?></p>
            </div>
          </section>

        <?php elseif ($post->ID == $course_post_ids[1] || $post->ID == $course_post_ids[3]) : ?>

          <section class="course_introduction">
            <div class="course_name">
              <h1><?php echo get_the_title($post->ID); ?></h1>
            </div>
            <div class="clearfix course_wrapp">
              <div class="course_img">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($post->ID, 'コースのイメージ1', true), false, false)[0]; ?>" alt="<?php echo get_post_meta($post->ID, 'コースのイメージ1_alt属性', true); ?>">
              </div>
              <div class="course_prf">
                <ul>
                  <?php echo get_post_meta($post->ID, 'course_time_prise', true); ?>
                </ul>
              </div>
            </div>
            <div class="course_comment">
              <p><?php echo get_post_meta($post->ID, 'コースの説明', true); ?></p>
            </div>
          </section>

        <?php elseif ($post->ID == $course_post_ids[2]) : ?>

          <section class="course_introduction">
            <div class="course_name">
              <h1><?php echo get_the_title($post->ID); ?></h1>
            </div>
            <div class="mb_fl_style">
              <div class="course_prf">
                <ul>
                  <?php echo get_post_meta($post->ID, 'course_time_prise', true); ?>
                </ul>
              </div>
              <div class="flex_box">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($post->ID, 'コースのイメージ1', true), false, false)[0]; ?>" alt="<?php echo get_post_meta($post->ID, 'コースのイメージ1_alt属性', true); ?>">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($post->ID, 'コースのイメージ2', true), false, false)[0]; ?>" alt="<?php echo get_post_meta($post->ID, 'コースのイメージ2_alt属性', true); ?>">
                <img src="<?php echo wp_get_attachment_image_src(get_post_meta($post->ID, 'コースのイメージ3', true), false, false)[0]; ?>" alt="<?php echo get_post_meta($post->ID, 'コースのイメージ3_alt属性', true); ?>">
              </div>
            </div>
            <div class="course_comment">
              <p><?php echo get_post_meta($post->ID, 'コースの説明', true); ?></p>
            </div>
          </section>
        <?php endif; ?>
        <!-- ループ終了 -->
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
        </div><!-- /.course_fl_wrapper -->
</main>
<div class="img_logo smooth">
  <img src="<?php echo get_template_directory_uri(); ?>/img/skelton_logo.svg" alt="スウェディッシュマッサージで最高の癒しを提供するリラクゼーションサロン・ヘンリック">
</div>
<div class="top_scroll" id="to_top">
  <a href=" #top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top_scroll.png" alt="">TOP</a>
</div>


<?php get_footer(); ?>