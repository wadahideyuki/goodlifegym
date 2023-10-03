<?php

/**
 * Template Name: 店舗詳細ページ
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="l-wrapper"><!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P36PRNS" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MDQRW34D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <!-- A8 -->
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8shopForm.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js "></script>
    <!--// A8 -->
  <!doctype html>
  <html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8MLD0Z0N3G"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-8MLD0Z0N3G');
    </script>
    <!-- Google Tag Manager-->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-P36PRNS');
    </script>
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MDQRW34D');
    </script>
    <!-- End Google Tag Manager -->
    <!-- A8 -->
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8shopForm.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js "></script>
    <!--// A8 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="content-script-type" content="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,viewport-fit=cover">
    <title><?php the_field('shopname'); ?> | グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム</title>
    <meta name="description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。">
    <meta name="keywords" content="">
    <!-- OGs-->
    <meta property="og:site_name" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）" />
    <meta property="og:title" content="グッドライフジム（GOODLIFEGYM）定額通い放題のマンツーマン、セミパーソナルトレーニングジム（代々木・東日本橋・浅草）" />
    <meta property="og:description" content="グッドライフジム（GOODLIFEGYM）は定額通い放題・初心者も安心のパーソナルトレーニングジム（代々木・東日本橋・浅草）です。" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://goodlifegym.jp/undefined" />
    <meta property="og:image" content="https://goodlifegym.jp/ogimg.png" />
    <!-- /OGs-->
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link href="https://goodlifegym.jp/common/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script src="https://goodlifegym.jp/common/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="https://goodlifegym.jp/common/js/slick.min.js" type="text/javascript"></script>
    <script src="https://goodlifegym.jp/common/js/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="https://goodlifegym.jp/common/js/common.js?2022-3" type="text/javascript"></script>
    <script>
      $(function() {
        function deleteCookie(name) {
          document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
        }
        deleteCookie("orderNum");
        deleteCookie("orderId");

        function setCookie(name, value, days) {
          let expires = "";
          if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
          }
          document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }
        const url = new URL(window.location.href);
        const pathname = url.pathname.split('/'); // パスを'/'で分割
        const orderNum = pathname[1]; // 店舗
        let orderId = Date.now().toString(); // 受付番号

        $("#orderId").val(orderId)
        console.log(orderNum)
        console.log(orderId)
        setCookie("orderNum", orderNum, 30); // 
        setCookie("orderId", orderId, 30); // 
      })
    </script>
  </head>

  <body class="pageStores">
    <?php wp_body_open(); ?>
    <div class="l-wrapper">
      <?php get_template_part('template-parts/header/site-header'); ?>
      <?php
      $primestore_values = get_field('primestore');
      if ($primestore_values && in_array('Prm', $primestore_values)) :
      ?>
        <h1 class="ttl">GOODLIFE GYM prime<br class="sp"><?php the_field('shopname'); ?><br><small class="sub"><?php the_field('moretext'); ?></small></h1>
      <?php else : ?>
        <h1 class="ttl">GOODLIFE GYM<sup>®</sup><br class="sp"><?php the_field('shopname'); ?><br><small class="sub"><?php the_field('moretext'); ?></small></h1>
      <?php endif; ?>
      <div class="info">
        <?php
        $primestore_values = get_field('primestore');
        if ($primestore_values && in_array('Prm', $primestore_values)) :
        ?>
          <dl>
            <dt>期間限定キャンペーン<br>2023年12月末までに体験お申し込みの方</dt>
            <dd>
              <ul>
                <li><strong>体験トレーニングが無料‼</strong></li>
                <li><strong>入会金通常30,000円が<em>10,000円</em>に‼</strong></li>
                <li><strong>通い放題プラン会費が特別割引料金に‼</strong></li>
              </ul><a class="u-btn1" href="#contact"> お問い合わせはこちら</a>
              <div class="d_more">※現在、お申込を多数いただいております。<br>今後、ご入会数に制限がかかる可能性がありますので、お早めに体験日確定をしていただくことをおすすめしております。</div>
            </dd>
          </dl>
        <?php else : ?>
          <dl>
            <dt>
              <?php
              $campaign_values = get_field('campaign');
              if (in_array('C1', $campaign_values) || in_array('C2', $campaign_values)) :
              ?>
                キャンペーン実施中！<span class="camp_info"><?php the_field('camp_info'); ?></span><span class="di_camp">限定人数に達した時点で終了いたします。お早めにお申し込みください。</span>
              <?php else : ?>
                体験当日ご入会で初期費用が２万円お得に！
              <?php endif; ?>
            </dt>
            <dd>
              <ul>
                <li><strong>入会金30,000円→<em>10,000円</em></strong></li>
                <?php
                $campaign_values = get_field('campaign');
                if ($campaign_values && in_array('C1', $campaign_values)) :
                ?>
                  <li><strong>初月会費→<em>10,000円割引</em></strong></li>
                <?php endif; ?>
                <?php
                $campaign_values = get_field('campaign');
                if ($campaign_values && in_array('C2', $campaign_values)) :
                ?>
                  <li><strong>カウンセリング＆初回体験料3,000円→<em>無料</em></strong></li>
                <?php endif; ?>
              </ul><a class="u-btn1" href="#contact"> お問い合わせはこちら</a>
              <div class="d_more">※現在、お申込を多数いただいております。<br>今後、ご入会数に制限がかかる可能性がありますので、お早めに体験日確定をしていただくことをおすすめしております。</div>
            </dd>
          </dl>
        <?php endif; ?>
      </div>

      <article class="featureZone">
        <h2 class="ttl2">2分で分かる<br class="sp">セミパーソナルトレーニング‼</h2>
        <div class="shopMov">
          <video width="100%" src="/common/img/train_vid.mp4" controls="" autoplay="" loop="" muted="" type="video/mp4"></video>
        </div>
      </article>

      <main class="l-cont">

        <?php the_field('images'); ?>

        <?php the_field('3Dmap'); ?>

        <?php the_field('guide'); ?>

        <?php the_field('voice'); ?>

        <?php
        $trainerblk_values = get_field('trainer_blk');
        if ($trainerblk_values && in_array('on', $trainerblk_values)) :
        ?>
          <article class="trainerZone">
            <div class="u-enTxt">TRAINER</div>
            <div class="u-inner">
              <h2 class="u-ttl1">​トレーナー紹介</h2>
            </div>
            <div class="trainerBox box2" id="app">
              <template v-for="(item, index) in posts">
                <div class="col" v-if="item.acf.store.includes('<?php the_field('shopname'); ?>')">
                  <div class="ph"><img v-bind:src="item.acf.photo1" loading="lazy"><img class="cov" v-bind:src="item.acf.photo2" loading="lazy"></div>
                  <h3 class="taC"><span>{{item.title.rendered}}</span>
                    <div v-html="item.content.rendered"></div>
                  </h3>
                </div>
              </template>
            </div>
          </article>
        <?php endif; ?>


        <div class="mapZone">
          <iframe src="<?php the_field('mapurl'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <?php
        $primestore_values = get_field('primestore');
        if ($primestore_values && in_array('Prm', $primestore_values)) :
        ?>
          <article class="priceZone" id="price">
            <div class="u-enTxt">PRICE</div>
            <div class="u-inner">
              <h2 class="u-ttl1">​料金のご案内</h2>
              <p>スケジュールに合わせて通い放題・週1プランからご選択いただけます。</p>
              <div class="planArea">
                <div class="planBox">
                  <div class="contWrap is-active">
                    <ul class="planList prm_li">
                      <li>
                        <div class="lm_ic">人数限定</div>
                        <h3>セミパ通い放題prime</h3><span class="monthly">通常料⾦：24,800円<br class="sp">→期間限定：<em>19,800</em>円(税込)</span>
                        <!--.note_store GOODLIFE GYM prime恵比寿広尾店-->
                        <p class="recommend">セミパーソナルトレーニング<br class="sp">通い放題<br>【他店舗相互利用可能】</p>
                      </li>
                      <li>
                        <h3>セミパ週１回</h3><span class="monthly">月額<em>14,800</em>円(税込)</span>
                        <p class="recommend">セミパーソナルトレーニング<br>週１回（月４～５回分）​​</p>
                      </li>
                      <li>
                        <div class="lm_ic">人数限定</div>
                        <h3 class="al_right">マンツーマン通い放題prime</h3><span class="monthly">通常料⾦：44,800円<br class="sp">→期間限定：<em>34,800</em>円(税込)</span>
                        <!--.note_store GOODLIFE GYM prime恵比寿広尾店-->
                        <p class="recommend">セミパーソナルトレーニング<br class="sp">通い放題<br>【他店舗相互利用可能】</p>
                      </li>
                      <li>
                        <h3>マンツーマン週１回</h3><span class="monthly">月額<em>24,800</em>円(税込)</span>
                        <p class="recommend">マンツーマン<br>パーソナルトレーニング<br>週１回（月４～５回分）</p>
                      </li>
                      <li>
                        <div class="lm_ic">人数限定</div>
                        <h3>マンツーマン/セミパ<br class="sp">どっちも通い放題prime</h3><span class="monthly">通常料⾦：59,800円<br class="sp">→期間限定：<em>49,800</em>円(税込)</span>
                        <p class="recommend">マンツーマンパーソナル<br class="sp">セミパーソナル<br class="sp">通い放題<br>【他店舗相互利用可能】
                        </p>
                      </li>
                    </ul><span class="planNote">＊ご入会日より1ヶ月以内でプラン開始日をお選びいただけます<br>＊月の途中からのプラン開始も可能です<br>(例)4/20ご入会の場合、4/21〜5/20の期間内でプラン開始日をお選びいただけます</span>
                  </div>
                  <!--.tableBox
                table
                  tr
                    th カウンセリング＆初回体験料
                    td 3,000円→ <em>【キャンペーン中】無料</em>
                  tr
                    th 入会金・登録料
                    td <span class="price">30,000円</span> → <em>【キャンペーン中】初回体験当日のご入会で入会金10,000円</em>
                  tr 
                    th キャンペーン中の<br>ご入会でセミパ通い放題prime会費
                    td 24,800円→ <em>【キャンペーン中】19,800円</em>
                  tr
                    th 毎月のお支払い方法
                    td 銀行振込またはクレジットカード<small>(VISA/master/AMEX/JCB/Diners/Discover)</small>
                
                
                -->
                </div>
              </div>
            </div>
          </article>
        <?php else : ?>
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
                        <div class="lm_ic">人数限定</div>
                        <h3>セミパ通い放題</h3><span class="monthly">月額<em>19,800</em>円(税込)</span>
                        <p class="recommend">セミパーソナルトレーニング<br>通い放題<br>【他店舗相互利用可能】</p>
                      </li>
                      <li>
                        <h3>セミパ週１回</h3><span class="monthly">月額<em>14,800</em>円(税込)</span>
                        <p class="recommend">セミパーソナルトレーニング<br>週１回（月４～５回分）​​</p>
                      </li>
                      <li>
                        <div class="lm_ic">人数限定</div>
                        <h3>マンツーマン通い放題</h3><span class="monthly">月額<em>34,800</em>円(税込)</span>
                        <p class="recommend">マンツーマンパーソナル<br>トレーニング通い放題<br>【他店舗相互利用可能】</p>
                      </li>
                      <li>
                        <h3>マンツーマン週１回</h3><span class="monthly">月額<em>24,800</em>円(税込)</span>
                        <p class="recommend">マンツーマン<br>パーソナルトレーニング<br>週１回（月４～５回分）</p>
                      </li>
                      <li>
                        <div class="lm_ic">人数限定</div>
                        <h3>マンツーマン/セミパ<br>どっちも通い放題</h3><span class="monthly">月額<em>49,800</em>円(税込)</span>
                        <p class="recommend">マンツーマンパーソナル<br>セミパーソナル<br class="sp">通い放題<br>【他店舗相互利用可能】</p>
                      </li>
                    </ul><span class="planNote">＊ご入会日より1ヶ月以内でプラン開始日をお選びいただけます<br>＊月の途中からのプラン開始も可能です<br>(例)4/20ご入会の場合、4/21〜5/20の期間内でプラン開始日をお選びいただけます</span>
                  </div>
                  <div class="tableBox">
                    <table>
                      <tbody>
                        <tr>
                          <th>カウンセリング＆初回体験料</th>
                          <td>
                            <?php
                            $campaign_values = get_field('campaign');
                            if ($campaign_values && in_array('C2', $campaign_values)) :
                            ?>
                              3,000円→ <em>【キャンペーン中】無料</em>
                            <?php else : ?>
                              3,000円
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <th>入会金・登録料</th>
                          <td><span class="price">30,000円</span> → <em>【キャンペーン中】初回体験当日のご入会で入会金10,000円</em></td>
                        </tr>
                        <tr>
                          <th>毎月のお支払い方法</th>
                          <td>
                            <?php
                            $payment_values = get_field('payment');
                            if ($payment_values && in_array('Pay2', $payment_values)) :
                            ?>
                              口座振替またはクレジットカード
                            <?php else : ?>
                              銀行振込またはクレジットカード
                            <?php endif; ?><small>(VISA/master/AMEX/JCB/Diners/Discover)</small>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </article>
        <?php endif; ?>


        <article class="contactZone">
          <div class="u-enTxt" id="contact">CONTACT</div>
          <div class="u-inner">
            <h2 class="u-ttlBox1"><small><?php the_field('shopname'); ?> お問い合わせ</small><span></span></h2>
            <p class="u-lead1">カウンセリング、初回体験をご希望の方は、<br>以下のメールフォームよりお問合せください。</p>
            <!-- .u-stopBox p 　現在、定員につき新規受付停止中です。
        -->
            <!-- class, action, methodを変更しないでください-->
            <div class="formBox">
              <form class="formrun" action="https://form.run/api/v1/r/<?php the_field('contact'); ?>" method="post">
                <!-- ↓自由に要素を追加・編集することができます-->
                <h3>お問い合わせ種別</h3>
                <div class="row inqType">
                  <label>お問い合わせ種別を選択してください <span class="must">必須</span></label>
                  <ul class="column">
                    <li>
                      <label>
                        <input class="showDate" name="お問い合わせ種別" type="radio" value="初回体験" required>初回体験
                      </label>
                      <label>
                        <input name="お問い合わせ種別" type="radio" value="サービスに関するご質問" required>サービスに関するご質問
                      </label>
                    </li>
                  </ul>
                </div>
                <h3>お客様情報 </h3>
                <div class="row">
                  <label>お名前 <span class="must">必須</span></label>
                  <input name="お名前" type="text" placeholder="山田 太郎" required>
                </div>
                <div class="row">
                  <label>メールアドレス <span class="must">必須</span></label>
                  <input name="メールアドレス" type="text" placeholder="example@mail.com" data-formrun-type="email" required>
                </div>
                <div class="row">
                  <label>電話番号 <span class="must">必須</span></label>
                  <input name="電話番号" type="text" required placeholder="0123456789">
                </div>
                <div class="row">
                  <label>当ジムを知ったきっかけ</label>
                  <select name="当ジムを知ったきっかけ">
                    <option value=""> 選択してください</option>
                    <option value="インターネット検索"> インターネット検索</option>
                    <option value="GOOGLEマップ検索"> GOOGLEマップ検索</option>
                    <option value="看板"> 看板</option>
                    <option value="チラシ"> チラシ</option>
                    <option value="Instagram"> Instagram</option>
                    <option value="Facebook"> Facebook</option>
                    <option value="Twitter"> Twitter</option>
                    <option value="TikTok"> TikTok</option>
                    <option value="会員様のご紹介"> 会員様のご紹介</option>
                  </select>
                </div>
                <div class="dateBox">
                  <h3>初回体験をご希望の方 </h3>
                  <div class="row">
                    <label>ご希望の店舗 </label>
                    <ul class="column">
                      <li>
                        <label>
                          <input id="shopName" name="ご希望の店舗" type="hidden" value="<?php the_field('shopname'); ?>"><?php the_field('shopname'); ?>
                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="row">
                    <label>どちらのプランをご希望ですか？ <span class="must">必須</span></label>
                    <?php
                    $primestore_values = get_field('primestore');
                    if ($primestore_values && in_array('Prm', $primestore_values)) :
                    ?>
                      <ul class="column">
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="通い放題" required="required">通い放題
                          </label>
                        </li>
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="週一回" required="required">週一回
                          </label>
                        </li>
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="相談して決めたい" required="required">相談して決めたい
                          </label>
                        </li>
                      </ul>
                    <?php else : ?>
                      <ul class="column">
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="マンツーマン" required="">マンツーマン
                          </label>
                        </li>
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="セミパーソナル" required="">セミパーソナル
                          </label>
                        </li>
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="セミパーソナル" required="">マンツーマン/セミパどっちも通い放題
                          </label>
                        </li>
                        <li>
                          <label>
                            <input name="どちらにご興味がございますか" type="radio" value="相談して決めたい" required="">相談して決めたい
                          </label>
                        </li>
                      </ul>
                    <?php endif; ?>
                  </div>
                  <div class="row">
                    <label>ご希望の⽇時（第1希望） <span class="must">必須</span></label>
                    <div class="date">
                      <input name="ご希望の⽇（第1希望）" type="date">
                      <select name="ご希望の時間（第1希望）" type="date">
                        <option value=""> 選択してください</option>
                        <option value="何時でもOK"> 何時でもOK</option>
                        <option value="9～15時"> 9～15時</option>
                        <option value="15～22時"> 15～22時</option>
                        <option value="9～13時"> 9～13時</option>
                        <option value="12～16時"> 12～16時</option>
                        <option value="15～19時"> 15～19時</option>
                        <option value="20～22時"> 20～22時</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <label>ご希望の⽇時（第2希望） <span class="must">必須</span></label>
                    <div class="date">
                      <input name="ご希望の⽇（第2希望）" type="date">
                      <select name="ご希望の時間（第2希望）" type="date">
                        <option value=""> 選択してください</option>
                        <option value="何時でもOK"> 何時でもOK</option>
                        <option value="9～15時"> 9～15時</option>
                        <option value="15～22時"> 15～22時</option>
                        <option value="9～13時"> 9～13時</option>
                        <option value="12～16時"> 12～16時</option>
                        <option value="15～19時"> 15～19時</option>
                        <option value="20～22時"> 20～22時</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <label>ご希望の⽇時（第3希望） <span class="must">必須</span></label>
                    <div class="date">
                      <input name="ご希望の⽇（第3希望）" type="date">
                      <select name="ご希望の時間（第3希望）" type="date">
                        <option value=""> 選択してください</option>
                        <option value="何時でもOK"> 何時でもOK</option>
                        <option value="9～15時"> 9～15時</option>
                        <option value="15～22時"> 15～22時</option>
                        <option value="9～13時"> 9～13時</option>
                        <option value="12～16時"> 12～16時</option>
                        <option value="15～19時"> 15～19時</option>
                        <option value="20～22時"> 20～22時</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <p class="notes" style="color:red">※必ず第3希望まで日時をご指定ください</p>
                  </div>
                </div>
                <h3>サービスに関するご質問をご希望の方</h3>
                <div class="row">
                  <label>ご質問の内容を以下にご記入ください </label>
                  <textarea name="お問い合わせ内容" placeholder="お問い合わせ内容を入力(知人からの紹介の方はこちらにご紹介者のお名前を記載ください)"></textarea>
                </div>
                <div class="last_cb">
                  <label>
                    <input name="プライバシーポリシーに同意する" type="checkbox" value="プライバシーポリシーに同意する" required> <a href="/privacy/" target="_blank">プライバシーポリシーに同意する</a>
                  </label>
                </div>
                <input type="hidden" name="受付ID" value="" id="orderId">

                <?php
                $current_slug = basename(get_permalink());
                if ($current_slug === 'ochiaiminami') :
                ?>
                  <!-- ochiaiminami ボット投稿をブロックするためのタグ-->
                  <div class="_formrun_gotcha">
                    <style media="screen">
                      ._formrun_gotcha {
                        position: absolute !important;
                        height: 1px;
                        width: 1px;
                        overflow: hidden;
                      }
                    </style>
                    <label for="_formrun_gotcha">If you are a human, ignore this field</label>
                    <input id="_formrun_gotcha" type="text" name="_formrun_gotcha" tabindex="-1">
                  </div>
                  <div class="s"></div>
                  <button type="submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中..." onclick="gtag('event', 'contact', {'event_category': 'contact','event_label': 'contact','value': 'contact'});">送信</button>
                  <script>
                    var directoryPath = window.location.pathname;
                    directoryPath = directoryPath.replace(/^\/|\/$/g, '');
                    var eventName = "shopPageView_" + directoryPath;
                    console.log(eventName);

                    function loadFinished() {
                      gtag("event", eventName, {
                        event_category: "shopPageView",
                        event_label: directoryPath
                      });
                    }
                    window.onload = loadFinished;
                  </script>
                <?php else : ?>
                  <!-- ボット投稿をブロックするためのタグ-->
                  <div class="_formrun_gotcha">
                    <style media="screen">
                      ._formrun_gotcha {
                        position: absolute !important;
                        height: 1px;
                        width: 1px;
                        overflow: hidden;
                      }
                    </style>
                    <label for="_formrun_gotcha">If you are a human, ignore this field</label>
                    <input id="_formrun_gotcha" type="text" name="_formrun_gotcha" tabindex="-1">
                  </div>
                  <div class="rowRcap">
                    <div class="g-recaptcha" data-sitekey="6LfD0JQaAAAAAKtPPhOY-IlUZHPYISkGlOX2U2bW"></div>
                  </div>
                  <button type="submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中..." onclick="gtag('event', 'contact', {'event_category': 'contact','event_label': 'contact','value': 'contact'});">送信</button>
                  <script>
                    var directoryPath = window.location.pathname;
                    directoryPath = directoryPath.replace(/^\/|\/$/g, '');
                    var eventName = "shopPageView_" + directoryPath;
                    console.log(eventName);

                    function loadFinished() {
                      gtag("event", eventName, {
                        event_category: "shopPageView",
                        event_label: directoryPath
                      });
                    }
                    window.onload = loadFinished;
                  </script>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </article>

        <article class="storesZone" id="access">
          <div class="u-enTxt">store</div>
          <div class="u-inner">
            <h2 class="u-ttl1">店舗のご案内</h2>
          </div>
          <ul class="shoplist">
            <li><a href="/store/#tokyo">東京都</a></li>
            <li><a href="/store/#saitama">埼玉県</a></li>
            <li><a href="/store/#chiba">千葉県</a></li>
            <li><a href="/store/#kanagawa">神奈川県</a></li>
            <li><a href="/store/#shizuoka">静岡県</a></li>
            <li><a href="/store/#fukuoka">福岡県</a></li>
            <li></li>
            <li></li>
          </ul>
        </article>
      </main>
    </div>

    <?php
    get_footer();
    ?>
    <script src="https://unpkg.com/vue@3.1.5"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="/common/js/trainer.js" type="text/javascript"></script>
    <!-- Meta Pixel Code-->
    <script>
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '424779469346305');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=424779469346305&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Meta Pixel Code-->