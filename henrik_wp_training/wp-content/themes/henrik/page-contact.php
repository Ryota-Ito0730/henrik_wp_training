<?php get_header('contact'); ?>
<div class="breadcrum clearfix" id="under_bread_wrapp">
  <ul>
    <li><a href="index.html">TOP</a></li>
    <li>></li>
    <li>お問い合わせ</li>
  </ul>
</div>
<main>
  <section class="contact_title">
    <h1>お問い合わせ</h1>
    <p>当サロンのサービスへのご質問、また今後のサービス向上のためのご意見等、お気軽にお問い合わせをお願いします。<br>※返信が必要だと判断した場合、翌営業日までに当サロンよりご連絡いたします。</p>
  </section>
  <form class="contact_form" action="#">
    <label for="name">お名前</label>
    <input class="smooth" type="text" id="name" placeholder="ex)山田 花子" required>
    <label for="email">メールアドレス</label>
    <input class="smooth" type="email" id="email" placeholder="ex)example@ne.jp" required>
    <label for="contact_text">お問い合わせ内容<br></label>
    <textarea rows="8" cols="80" id="contact_text" placeholder="こちらにお問い合わせ内容の入力をお願いいたします" required></textarea>
    <div class="contact_btn">
      <input class="smooth" type="submit" value="送信">
    </div>
  </form>
  <section class="contact_notice">
    <p>※お電話でのお問い合わせの場合、電話番号：03-1234-5678(新宿店直通)へご連絡をお願いいたします。<br>
      ※当サロンからメールは、info@henrik.comから送信しますので、あらかじめドメイン指定受信拒否の解除等を行っていただき、メール受信をできるように設定をお願いいたします。<br>
      ※営業時間:10:00~20:00(最終受付:19:30) 定休日:月曜日 </p>
  </section>
</main>
<div class="img_logo smooth">
  <img src="<?php echo get_template_directory_uri(); ?>/img/skelton_logo.svg" alt="スウェディッシュマッサージで最高の癒しを提供するリラクゼーションサロン・ヘンリック">
</div>
<div class="top_scroll" id="to_top">
  <a href=" #top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top_scroll.png" alt="">TOP</a>
</div>
<?php get_footer(); ?>