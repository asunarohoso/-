<?php include_once("inc/meta.php"); ?>
<?php include_once("inc/header.php"); ?>
<main>
<!-- slider -->
<?php
$slider = <<<SLIDER
[
"img/zoomslider/slider_1.jpg",
"img/zoomslider/slider_2.jpg",
"img/zoomslider/slider_3.jpg"
]
SLIDER;
?>
  <div class="scroll_hide" id="zoom_slider" data-zs-src='<?=$slider;?>' data-zs-overlay="dots" data-zs-bullets="false">
    <div class="slider-inner-content">
      <h2>
        <img id="char" src="img/logochar_s_white.svg" alt="全国新聞・各種雑誌・印刷物全般・ウェブ - 総合広告代理店 - 株式会社あすなろ報創">
        <p>
          あすなろ報創は東京都千代田区内神田の広告代理店です。効果的な広告のご用命、ご相談は是非当社にお任せください。東京スポーツ、その他各新聞メディアや雑誌広告も取り扱っております。インターネット広告、ホームページの作成、リニューアル等や、ポスター、チラシの作成も承ります。
        </p>
      </h2>
    </div>
  </div>
  <!-- news -->
  <section class="news_index scroll_hide">
    <h3><img src="img/h3_news.svg"><span class="hidden">新着情報</span></h3>
    <div class="sectionInner">
      <ul>
        <li>
          <span class="category info_publish">掲載情報</span>
          <span class="date">2018.08.06</span>
          <span class="newsTitle">株式会社MM建設様　ランクリードへの掲載が開始されました</span>
        </li>
        <li>
          <span class="category info_media">媒体情報</span>
          <span class="date">2018.08.06</span>
          <span class="newsTitle">求人サイト【ランクリード】取り扱いを開始しました。ドライバー、土木建築関係の募集の際はお問い合わせください。</span>
        </li>
        <li>
          <span class="category info_company">会社情報</span>
          <span class="date">2018.08.06</span>
          <span class="newsTitle">あすなろ報創のサイトをリニューアルしました。</span>
        </li>
        <li>
          <span class="category info_publish">掲載情報</span>
          <span class="date">2018.08.06</span>
          <span class="newsTitle">株式会社MM建設様　ランクリードへの掲載が開始されました</span>
        </li>
        <li>
          <a href="#" class="view_more"> >> もっと見る</a>
        </li>
      </ul>
    </div>
  </section>
  <!-- media -->
  <section class="media_index scroll_hide">
    <h3><img src="img/h3_media.svg"><span class="hidden">取扱媒体</span></h3>
    <div class="sectionInner">
      <div>
        ここに示しました各種メディア媒体以外もご相談を承ります。 広告をご用命の際は是非、総合広告代理店、株式会社あすなろ報創を。<br>
        優秀なスタッフが御社の為に費用対効果の高い広告宣伝戦略を立案から制作、そしてアフターフォローまでしっかりとお手伝いさせていただきます。<br>
        確かな広告、確かな手ごたえ、そして確かなお値段で真心のこもったサービスを展開しております。<br>
        <a href="media.php" class="view_more"> >> もっと見る</a>
      </div>
      <ul>
        <li><img src="img/media/media_logo_tosupo.jpg"><span class="hidden">東京スポーツ</span></li>
        <li><img src="img/media/media_logo_an.jpg"><span class="hidden">an(アン)</span></li>
        <li><img src="img/media/media_logo_line.jpg"><span class="hidden">LINEバイト</span></li>
        <li><img src="img/media/media_logo_ranqlead.jpg"><span class="hidden">ランクリード</span></li>
        <li><img src="img/media/media_logo_mynavi.jpg"><span class="hidden">マイナビ</span></li>
        <li><img src="img/media/media_logo_create.jpg"><span class="hidden">クリエイト</span></li>
      </ul>
    </div>
  </section>
  <!-- works -->
  <section class="works_index scroll_hide">
    <h3><img src="img/h3_works.svg"><span class="hidden">制作実績</span></h3>
    <div class="sectionInner">
      <ul>
        <li><img src="img/works/glande.jpg"><span class="hidden">glande様　webサイト</span></li>
        <li><img src="img/works/poster.jpg"><span class="hidden">下町っこ様　ポスター</span></li>
        <li><img src="img/works/tiara.jpg"><span class="hidden">ティアラ様　webサイト</span></li>
        <li><img src="img/works/sympathy.jpg"><span class="hidden">シンパシー様　webサイト</span></li>
        <li><img src="img/works/glande.jpg"><span class="hidden">glande様　webサイト</span></li>
        <li><img src="img/works/poster.jpg"><span class="hidden">下町っこ様　ポスター</span></li>
      </ul>
    </div>
  </section>
  <!-- company -->
  <section class="company_index scroll_hide">
    <h3><img src="img/h3_company.svg"><span class="hidden">会社概要</span></h3>
    <div class="sectionInner">
      <div>
        <dl>
          <dt>社名</dt>
          <dd>株式会社あすなろ報創</dd>
          <dt>代表</dt>
          <dd>伊豆味文明</dd>
          <dt>所在地</dt>
          <dd>
            101-0047<br>
            東京都千代田区内神田2-13-7
          </dd>
          <dt>アクセス</dt>
          <dd>
            大手町駅より徒歩5分<br>
            神田駅より徒歩3分
          </dd>
          <dt>創立</dt>
          <dd>昭和55年5月</dd>
          <dt>メール</dt>
          <dd>contact@asunaro-h.co.jp</dd>
        </dl>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4156329831308!2d139.7661413154727!3d35.69138833702189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c0157967041%3A0xa816c43fbf391f68!2z5qCq5byP5Lya56S-44GC44GZ44Gq44KN5aCx5Ym1!5e0!3m2!1sja!2sjp!4v1542013063996" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
</main>
<?php include_once("inc/footer.php"); ?>
