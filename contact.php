<?php include_once("inc/meta.php"); ?>
<?php include_once("inc/header.php"); ?>
<main>
<section>
  <h3 class="scroll_hide"><img src="img/h3_contact.svg"><span class="hidden">お問い合わせ</span></h3>
  <div class="contents_contact">
    <div class="contact_phone scroll_hide" data-delay="300">
      <h4>電話でのお問い合わせ<span>受付時間 10:00~18:00（土日祝日、当社指定休日は休み）</span></h4>
      <p><a href="tel:03-3254-3111">03-3254-3111</a></p>
    </div>
    <div class="contact_form scroll_hide" data-delay="340">
      <h4>メールフォームでのお問い合わせ</h4>
      <p>下記フォームに必要事項を入力してください</p>
      <form action="">
        <dl>
          <dt>お名前(又は会社名)</dt>
          <dd><input type="text"></dd>
        </dl>
        <dl>
          <dt>フリガナ</dt>
          <dd><input type="text"></dd>
        </dl>
        <dl>
          <dt>電話番号</dt>
          <dd><input type="tel"></dd>
        </dl>
        <dl>
          <dt>メールアドレス</dt>
          <dd><input type="email"></dd>
        </dl>
        <dl>
          <dt>お問い合わせ内容</dt>
          <dd><textarea name="" id="" cols="30" rows="10"></textarea></dd>
        </dl>
        <dl>
          <dt></dt>
          <dd><input type="submit" value="送信する" id="submit"></dd>
        </dl>
      </form>
    </div>
  </div>
</section>
</main>
<?php include_once("inc/footer.php"); ?>
