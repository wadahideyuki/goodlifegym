<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
  
<!DOCTYPE html>
<html lang="ja">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8MLD0Z0N3G"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'G-8MLD0Z0N3G');
    </script>
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-P36PRNS');
    </script>
    <!-- End Google Tag Manager-->
    
  <!-- A8 -->
  <script src="//statics.a8.net/a8sales/a8sales.js"></script>
  <script src="//statics.a8.net/a8sales/a8shopForm.js"></script>
  <script src="//statics.a8.net/a8sales/a8crossDomain.js "></script>
  <!--// A8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-script-type" content="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,viewport-fit=cover">
    <title><?php the_title() ?> | グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム</title>
    <meta name="description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。">
    <meta name="keywords" content="">
    <!-- OGs-->
    <meta property="og:site_name" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）"/>
    <meta property="og:title" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）"/>
    <meta property="og:description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://goodlifegym.jp/undefined"/>
    <meta property="og:image" content="https://goodlifegym.jp/ogimg.png"/>
    <!-- /OGs-->
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link href="/common/css/style.css?20220523" rel="stylesheet" type="text/css" media="all"/>
    <script src="/common/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/common/js/slick.min.js" type="text/javascript"></script>
    <script src="/common/js/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="/common/js/common.js?2022-5" type="text/javascript"></script>
  </head>
  <body class="pageStores">
    <div class="l-wrapper">
      <div class="areaHead">
        <img src="/common/img/logo_tenpo.png?v2" loading="lazy">
      </div>
    </div>
    <div class="pageAreaofodawara"> 
      <div class="mainInner">
        <div class="mainZone">
          <div class="areaTitle">
            <div class="txt"> 
              <h2>全国<span><?php
                    $pages_count = wp_count_posts('page');
                    $published_pages = $pages_count->publish;
                    echo $published_pages - 1;
                    ?></span>店舗展開</h2>
              <div class="bot"> 
                <p>定額通い放題・初心者も安心の<br>パーソナルトレーニングジム</p>
                <div class="mainLogo"><img src="/common/img/main/logo.png" alt="" loading="lazy"/>
                </div>
              </div>
            </div>
            <div class="img"><img src="/common/img/area/main.jpg" loading="lazy"/>
            </div>
          </div>
        </div>
      </div>
      <div class="content_in">
        <div class="inner">
          <p class="catch"><img src="/common/img/area/catch.svg" alt=""></p>
          <?php
            $current_name = basename(get_permalink());
            if ($current_name === 'fukuoka') :
              ?>
              <h2 class="tit">全国急拡大中の<br>セミパーソナルジムが<br class="sp">福岡県初出店</h2>
              <div class="next_ttl">定額通い放題・初心者も安心のパーソナルトレーニングジム</div>
            <?php else: ?>
              <h2 class="tit"><?php the_title() ?>の<br class="sp">GOODLIFE GYM®</h2>
              <div class="next_ttl">定額通い放題・初心者も安心のパーソナルトレーニングジム<br>GOODLIFE GYMは<?php the_title() ?>で<?php the_field('storeofnum'); ?>店舗展開中です。</div>
          <?php endif; ?>
          <div class="ttl2">お得なキャンペーン実施中</div>
          <div class="d_more">※現在、お申込を多数いただいております。<br>今後、ご入会数に制限がかかる可能性がありますので、<br class="sp">お早めに体験日確定をしていただくことをおすすめしております。</div>
          <div class="vid_blk">
            <h2 class="ttl2 vid_tit">2分で分かる<br class="sp">セミパーソナルトレーニング‼</h2>
            <div class="shopMov">
              <video width="100%" src="/common/img/train_vid.mp4" controls="" autoplay="" loop="" muted="" type="video/mp4"></video>
            </div>
          </div>


          <?php the_field('storelist'); ?>


        </div>
      </div>
      <div class="mapZone">
        <div><iframe class="custom-google-map" src="<?php the_field('mapofurl'); ?>"></iframe></div>
      </div>
      <!--.info.d_three
      h2.ttl2 今だけのキャンペーン
      .d_more ※現在、お申込を多数いただいております。<br>今後、ご入会数に制限がかかる可能性がありますので、お早めに体験日確定をしていただくことをおすすめしております。
      dl
        dt 小田原店のキャンペーン情報
        dd  
          ul  
            li
              strong 入会金割引<br>
              span 入会金30,000円→<em>10,000円</em>
            li
              strong 体験料無料<br>
              span カウンセリング＆初回体験料3,000円→<em>無料</em>
          a(href="/odawara/#contact").u-btn1  お問い合わせはこちら
      dl
        dt 小田原駅東口店のキャンペーン情報
        dd  
          ul  
            li
              strong 入会金割引<br>
              span 入会金30,000円→<em>10,000円</em>
            li
              strong 体験料無料<br>
              span カウンセリング＆初回体験料3,000円→<em>無料</em>
          a(href="/odawarahigashi/#contact").u-btn1  お問い合わせはこちら
      
      dl
        dt 小田原市役所前店のキャンペーン情報
        dd  
          ul  
            li
              strong 入会金割引<br>
              span 入会金30,000円→<em>10,000円</em>
            li
              strong 体験料無料<br>
              span カウンセリング＆初回体験料3,000円→<em>無料</em>
          a(href="/odawaracityhall/#contact").u-btn1  お問い合わせはこちら
      dl
        dt 小田原国府津店のキャンペーン情報
        dd  
          ul  
            li
              strong 入会金割引<br>
              span 入会金30,000円→<em>10,000円</em>
          a(href="/kozu/#contact").u-btn1  お問い合わせはこちら
      -->
      <article class="d_ses">
        <div class="u-enTxt">Session</div>
        <div class="u-inner"> 
          <h2>セッション</h2>
          <ul class="fl_ss">
            <li>
              <div class="img"><img src="/common/img/area/ss_im_ph01.png" alt="" loading="lazy"/>
              </div>
              <div class="cap">マンツーマンパーソナルトレーニング</div>
              <p>GOODLIFE GYMでは、毎日通っても飽きずに楽しめるトレーニングメソッドを提供し、皆様の日常にフィットネスがあることが当たり前と思えるような環境作りに励んでいます。フィットネスの日常化から始まるGOODLIFE(より良い人生)を体感してください。 </p>
            </li>
            <li>
              <div class="img"><img src="/common/img/area/ss_im_ph02.png" alt="" loading="lazy"/>
              </div>
              <div class="cap">セミパーソナルトレーニング</div>
              <p>最大4名を同時に指導するセミパーソナルトレーニング。初心者の方でも安心して通っていただけるようにトレーナー陣が個人の目的やレベルに合ったトレーニングを丁寧に1人1人指導いたします。</p>
            </li>
          </ul>
        </div>
      </article>
      <article class="informationZone">
        <div class="u-inner">
          <div class="movieBox">
            <h2>セミパーソナルの様子はこちらの動画をご覧ください</h2>
            <iframe src="https://www.youtube.com/embed/OJHTV5iRYQo?rel=0&amp;wmode=transparent" allowfullscreen="" frameborder="0"></iframe>
          </div>
        </div>
      </article>
      <div class="toHome"> <a href="/">公式サイトはこちら</a></div>
      <article class="priceZone" id="price">
        <div class="u-enTxt">PRICE</div>
        <div class="u-inner">
          <h2 class="u-ttl1">​料金のご案内</h2>
          <p>スケジュールに合わせて通い放題・週1プランからご選択いただけます。</p>
          <div class="planArea">
            <div class="planBox">
              <div class="contWrap is-active">
                <ul class="planList">
                  <li>
                    <h3>セミパ通い放題</h3><span class="monthly">月額<em>19,800</em>円(税込)</span>
                    <p class="recommend">セミパーソナルトレーニング<br>通い放題<br>【他店舗相互利用可能】</p>
                  </li>
                  <li>
                    <h3>セミパ週１回</h3><span class="monthly">月額<em>14,800</em>円(税込)</span>
                    <p class="recommend">セミパーソナルトレーニング<br>週１回（月４～５回分）​​</p>
                  </li>
                  <li>
                    <h3>マンツーマン通い放題</h3><span class="monthly">月額<em>34,800</em>円(税込)</span>
                    <p class="recommend">マンツーマンパーソナル<br>トレーニング通い放題<br>【他店舗相互利用可能】</p>
                  </li>
                  <li>
                    <h3>マンツーマン週１回</h3><span class="monthly">月額<em>24,800</em>円(税込)</span>
                    <p class="recommend">マンツーマン<br>パーソナルトレーニング<br>週１回（月４～５回分）</p>
                  </li>
                </ul><span class="planNote">＊ご入会日より1ヶ月以内でプラン開始日をお選びいただけます<br>＊月の途中からのプラン開始も可能です<br>(例)4/20ご入会の場合、4/21〜5/20の期間内でプラン開始日をお選びいただけます</span>
              </div>
              <div class="tableBox">
                <table>
                  <tr>
                    <th>カウンセリング＆初回体験料</th>
                    <td><?php
                      $have_camp = get_field('have_camp');
                      if( $have_camp && in_array('yes', $have_camp) ) :
                      ?>
                        3,000円→ <em>【キャンペーン中】無料</em>
                      <?php else: ?>
                        3,000円
                  <?php endif; ?></td>
                  </tr>
                  <tr>
                    <th>入会金・登録料</th>
                    <td><span class="price">30,000円</span> → <em>【キャンペーン中】初回体験当日のご入会で入会金10,000円</em></td>
                  </tr>
                  <tr>
                    <th>毎月のお支払い方法</th>
                    <td>銀行振込またはクレジットカード<small>(VISA/master/AMEX/JCB/Diners/Discover)</small></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </article>
      <article class="faqZone">
        <div class="u-enTxt">FAQ</div>
        <div class="u-inner">
          <h2 class="u-ttl1">よくあるご質問</h2>
          <dl>
            <dt>会員になると他の店舗も利用できますか？</dt>
            <dd>通い放題プランの方は週一回まで他店舗をご利用できます。<br>週1プランの方は登録店舗のみのご利用です。<br>登録店舗の変更可能です。</dd>
          </dl>
          <dl>
            <dt>セミパーソナルで周りについていけるか心配。<br class="sp">初心者でも大丈夫ですか？</dt>
            <dd>当ジムに入会される方の9割が初心者スタートです。性別年齢問わず多くの方がご参加されており、トレーナーが個々のレベルに合わせてメニューを組んでいくのでご安心ください！</dd>
          </dl>
          <dl>
            <dt>本当に定額で通い放題？</dt>
            <dd>毎月定額の会費のみで追加料金は一切かかりません。高額の短期集中型パーソナルジムが多い中、長く続けられるパーソナルジムを目指しております！</dd>
          </dl>
          <dl>
            <dt>1回のトレーニング時間は？</dt>
            <dd>マンツーマンパーソナル50分。セミパーソナル40分。開始10分前から入室可能です。</dd>
          </dl>
          <dl>
            <dt>予約の方法は？</dt>
            <dd>初回体験<br class="sp">→問い合わせフォーム<br><br class="sp">ご入会後<br class="sp">→会員様専用ご予約WEBサイト<br class="sp">※当日予約可能、当日キャンセルペナルティ無し</dd>
          </dl>
          <dl>
            <dt>予約は取りやすいですか？</dt>
            <dd>店舗毎に会員数を限定しておりますので、会員のみなさまが平等にご予約をお取りいただけます。週4-5日で通う会員様も多くいらっしゃいます！</dd>
          </dl>
          <dl>
            <dt>初回体験時の持ち物は？</dt>
            <dd>・動きやすいウエア<br>・室内シューズ(無料レンタルシューズあり)<br>・タオル<br>・水</dd>
          </dl>
          <dl>
            <dt>当日予約や当日キャンセルは可能ですか？料金はかかりますか？</dt>
            <dd>当日予約、当日キャンセル可能です。ペナルティなど料金もかかりません。</dd>
          </dl>
          <dl>
            <dt>高齢ですが入会できますか？</dt>
            <dd>当ジムに年齢制限はありません。初回体験時にカウンセリングを実施いたしますので現在の身体状況や過去の既往歴を詳しくお知らせください。</dd>
          </dl>
          <dl>
            <dt>持病がありますが入会できますか？</dt>
            <dd>医師から運動を制限されていなければご入会可能です。初回体験時にカウンセリングを実施いたしますので現在の身体状況や過去の既往歴を詳しくお知らせください。</dd>
          </dl>
        </div>
      </article>
      <!--article.trainerZone
      .u-enTxt TRAINER
      .u-inner
        h2.u-ttl1 ​トレーナー紹介
      #app.trainerBox.box2
        .col
          .ph
            +img("trainer/ph09.png","")
          h3.taC
            span リュウキ
            div 
              h3.wp-block-heading 小田原店,小田原駅東口店メイントレーナー<br>保健体育教員
        .col
          .ph
            +img("trainer/odawara-3-1.png","")
          h3.taC
            span ショウゴ
            div 
              h3.wp-block-heading 小田原国府津店、小田原駅東口店トレーナー
        .col
          .ph
            +img("trainer/odawara-2-1.png","")
          h3.taC
            span リョウタ
            div 
              h3.wp-block-heading 小田原店トレーナー
        .col
          .ph
            img(src="/common/img/trainer/odawara_a_p01.png", alt="")
            img.cov(src="/common/img/trainer/odawara_a_p02.png", alt="")
          h3.taC
            span イサム
            div 
              h3.wp-block-heading 小田原店、小田原国府津店トレーナー
        .col
          .ph
            img(src="/common/img/trainer/odawara_a2_p01.png", alt="")
            img.cov(src="/common/img/trainer/odawara_a2_p02.png", alt="")
          h3.taC
            span ジュンペイ
            div 
              h3.wp-block-heading 小田原駅東口店、小田原国府津店トレーナー
      
      -->
    </div>
    
    <div class="toHome"> <a href="/">公式サイトはこちら          </a></div>
    <script>
  var directoryPath = window.location.pathname;
var directoryParts = directoryPath.split('/');
var lastDirectory = directoryParts[directoryParts.length - 2];

var eventName = "areaPageView_" + lastDirectory;
console.log(eventName);
    function loadFinished() {
    gtag("event", eventName, { event_category: "areaPageView", event_label: lastDirectory });
    }
    
    window.onload = loadFinished;
  </script>
  </body>
<!--.fixBtn
.pc 
  +img("line_pc.png")
.sp
  a(href="http://nav.cx/ew6wavf") 
    +img("line_sp.png")
-->
<script src="https://unpkg.com/vue@3.1.5"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="/common/js/trainer.js" type="text/javascript"></script>
<!-- Meta Pixel Code-->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '424779469346305');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=424779469346305&amp;ev=PageView&amp;noscript=1"/></noscript>
<!-- End Meta Pixel Code-->
</html>
<?php
get_footer();
