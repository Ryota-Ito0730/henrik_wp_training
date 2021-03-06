<?php get_header(); ?>
<div class="breadcrum clearfix" id="under_bread_wrapp">
  <ul>
    <li><a href="index.html">TOP</a></li>
    <li>></li>
    <li>ご予約</li>
  </ul>
</div>
<main>
  <section class="reservation_title">
    <h1>ご予約</h1>
    <p>当サロンでは下記入力フォームに必要事項を送信いただき、施術のご予約を承っております。
      お手数ですが、下記入力事項をご入力後、送信ボタンを押下の上、ご予約情報の送信をお願いいたします。
      ※ご予約情報の確認後から、翌営業日までに予約確認のメールを送信いたします。<br>
      ※営業時間:10:00~20:00(最終受付:19:30) 定休日:月曜日</p>
  </section>
  <form class="reservation_form" action="">
    <label for="name">お名前</label>
    <input class="smooth" type="text" id="name" placeholder="ex)山田 花子" required>
    <label for="tel">電話番号</label>
    <input class="smooth" type="tel" id="tel" placeholder="ex)03xxxx0000" required>
    <label for="email">メールアドレス</label>
    <input class="smooth" type="email" id="email" placeholder="ex)example@ne.jp" required>
    <div class="label_fl_box">
      <div class="fl_left">
        <label for="date">ご希望日</label>
        <input class="smooth" type="date" id="date" required>
      </div>
      <div class="fl_right">
        <label for="time">ご希望時間帯</label>
        <input class="smooth" type="time" id="time" required>
      </div>
    </div>
    <label class="smooth" for="res_course">ご希望のコース</label>
    <select name="selected_course" id="res_course" required>
      <optgroup label="クラッシック・オイル・ボディケアコース">
        <option value=""> --選択してください-- </option>
        <option value="course1">クラッシック・オイル・ボディケアコース 60 min / ￥10,500</option>
        <option value="course2">クラッシック・オイル・ボディケアコース 75 min / ￥12,600</option>
        <option value="course3">クラッシック・オイル・ボディケアコース 90 min / ￥16,800</option>
      <optgroup label=""></optgroup>
      </optgroup>
      <optgroup label="フット(リフレクソロジー)コース">
        <option value="course4">フット(リフレクソロジー)コース 60 min / ￥7,350</option>
      <optgroup label=""></optgroup>
      </optgroup>
      <optgroup label="スペシャルコース">
        <option value="course5">スペシャルコース 120 min / ￥23,100</option>
        <option value="course6">スペシャルコース 150 min / ￥24,150</option>
      <optgroup label=""></optgroup>
      </optgroup>
    </select>
    <div class="op_box">
      <p>
        ※オプション:<span>アロマオイル(￥1,050)</span>
      </p>
      <div class="op_fl_box">
        <label for="res_op_yes">
          <p><input type="radio" name="option" value="op_yes" id="res_op_yes"><span>必要</span></p>
        </label>
        <label for="res_op_no">
          <input type="radio" name="option" value="op_no" id="res_op_no"><span>不要</span>
        </label>
      </div>
    </div>
    <div class="res_select_stuff">
      <label for="res_stuff">ご希望のスタッフ</label>
      <select class="smooth" name="selected_stuff" id="res_stuff">
        <option value="">なし</option>
        <option value="stuff1">片桐</option>
        <option value="stuff2">小林</option>
        <option value="stuff3">井出</option>
        <option value="stuff4">佐山</option>
      </select>
    </div>
    <label for="reservation_text">その他(ご希望等)<br></label>
    <textarea rows="8" cols="80" id="reservation_text" placeholder="ご予約に関するご希望がございましたらお知らせください"></textarea>

    <div class="reservation_btn">
      <input class="smooth" type="submit" value="送信">
    </div>
  </form>
  <section class="reservation_notice">
    <p>※お電話でのお問い合わせの場合、電話番号：03-1234-5678(新宿店直通)へご連絡をお願いいたします。<br>
      ※当サロンからメールは、info@henrik.comから送信しますので、あらかじめドメイン指定受信拒否の解除等を行っていただき、メール受信をできるように設定をお願いいたします。<br>
      ※営業時間:10:00~20:00(最終受付:19:30) 定休日:月曜日</p>
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