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

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>
<h1 class="ttl"> メディア掲載情報</h1>
<main class="l-cont">
  <div class="u-inner mediaList">
  <p class="lead">GOODLIFE GYMのメディア掲載情報です。</p>
    <ul class="list">
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <li>
          <span class="day"><?php the_date();?></span>
          <span class="txt">
            <?php the_field('shopName'); ?> が 
            「<a target="_blank" href="<?php the_field('mediaUrl'); ?>"><?php the_field('mediaName'); ?>」</a> の記事 
            「<a target="_blank" href="<?php the_field('pageUrl'); ?>"><?php the_field('pageName'); ?>」</a>に掲載されました。
          </span>
        </li>

      <?php endwhile; ?>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-tokyo" target="_blank">東京都内のパーソナルジム30選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 東日本橋店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-chuuouku" target="_blank">中央区のパーソナルジム25選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 浅草店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-daitouku" target="_blank">台東区のパーソナルジム15選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 中野店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-nakanoku" target="_blank">中野のパーソナルジム11選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime南千住駅前店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-arakawaku" target="_blank">荒川区のパーソナルジム8選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 西新井大師店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-adachiku" target="_blank">足立区のパーソナルジム14選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-shibuya" target="_blank">渋谷のパーソナルジム26選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 新御徒町店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-ueno" target="_blank">上野のパーソナルジム13選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 新御徒町店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-okachimachi" target="_blank">御徒町のパーソナルジム9選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime恵比寿店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-ebisu" target="_blank">恵比寿のパーソナルジム19選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime恵比寿店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-hiroo" target="_blank">広尾のパーソナルジム13選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 代々木店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-yoyogi" target="_blank">代々木のパーソナルジム11選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 東日本橋店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-kanda" target="_blank">神田のパーソナルジム12選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 中野野方店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-koenji" target="_blank">高円寺のパーソナルジム4選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 東日本橋店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-ningyocho" target="_blank">人形町のパーソナルジム10選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 五反野店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-ayase" target="_blank">綾瀬のパーソナルジム7選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 柏店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-chiba" target="_blank">千葉のパーソナルジム15選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 柏店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-kashiwa" target="_blank">柏のパーソナルジム11選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 福岡大橋店 が「<a href="https://getfit.jp/" target="_blank"> Getfit</a>」の記事「<a href="https://getfit.jp/gym/a-fukuoka" target="_blank">福岡のパーソナルジム21選</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 代々木店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/yoyogi/" target="_blank">【最新】代々木のジムおすすめ13選！安くて女性でも通いやすい！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime南千住駅前店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/ebisu/" target="_blank">【2023年最新版】恵比寿のジムおすすめ31選！24時間・パーソナルジム・プール・人気のピラティスも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 中野店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/nakanoku/" target="_blank">【最新】中野区のジムおすすめ20選！安くて女性も通いやすいジムも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 中野野方店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/nogata/" target="_blank">【2023年最新版】野方・沼袋のジムおすすめ5選！安くて女性でも通いやすい！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 東日本橋店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/hamacho/" target="_blank">【2023年最新版】浜町・東日本橋のジムおすすめ10選！安くて女性も通いやすいジムも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 新御徒町店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/okachimachi/" target="_blank">【最新】御徒町のジムおすすめ10選！安くて女性も通いやすいジムも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 台東入谷店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/taitoku-2/" target="_blank">【最新】台東区のジムおすすめ20選！安くて女性も通いやすいジムも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 浅草店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/personal-training/asakusa-3/" target="_blank">【2023年最新版】浅草のおすすめパーソナルトレーニング7選！安くて評判のいいジムは？</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime南千住駅前店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/minamisenju/" target="_blank">【最新】南千住のジムおすすめ5選！安くて女性も通いやすいジムも紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.03</span><span class="txt">GOODLIFE GYM 城南別府店/福岡大橋店 が「<a href="https://cani.jp/" target="_blank"> IDEAL</a>」の記事「<a href="https://cani.jp/fitness/fukuoka-2/" target="_blank">【2023年版】福岡のおすすめスポーツジム24選｜格安ジムや24時間営業、ヨガや女性にも人気のジムを一挙紹介！</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime南千住駅前店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/2935673" target="_blank">南千住でおすすめのパーソナルジム7選！女性向けのジムも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime南千住駅前店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/2935673" target="_blank">南千住でおすすめのパーソナルジム7選！女性向けのジムも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 新御徒町店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3484315" target="_blank">上野・御徒町のパーソナルジムおすすめ9選！初心者向けも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 東日本橋店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3488066" target="_blank">東日本橋のおすすめパーソナルジム5選！初心者でも通いやすいジムを紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 中野野方店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3490675" target="_blank">野方のおすすめパーソナルジム5選！初心者にもおすすめのジム紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 福岡大橋店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3490874" target="_blank">大橋にあるパーソナルジムおすすめ6選！料金やコースを紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 城南別府店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3489800" target="_blank">【福岡市城南区】パーソナルジムおすすめ7選！初心者向きのジムや本格的なジムも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.08.01</span><span class="txt">GOODLIFE GYM 台東入谷店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3487547" target="_blank">【東京】入谷＆鶯谷のパーソナルジムおすすめ8選！設備やサービスも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.31</span><span class="txt">通い放題セミパーソナルGOODLIFE GYM prime恵比寿店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/582460" target="_blank">恵比寿のパーソナルジム12選！女性向けやおすすめ店を紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.31</span><span class="txt">GOODLIFE GYM 中野店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/1953481" target="_blank">中野のパーソナルジムおすすめ10選！安くて女性も通いやすいジム</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.31</span><span class="txt">GOODLIFE GYM 浅草店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/2342541" target="_blank">浅草でおすすめのパーソナルジム8選！ジム選びのポイントも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.31</span><span class="txt">GOODLIFE GYM 代々木店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/1222872" target="_blank">代々木のおすすめパーソナルジム12選！安くて人気のジムをご紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.27</span><span class="txt">GOODLIFE GYM 足立江北店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3470584" target="_blank">江北駅周辺にあるパーソナルジムおすすめ4選！初心者向けのジムも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.27</span><span class="txt">GOODLIFE GYM 西新井大師店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3464176" target="_blank">西新井のおすすめパーソナルジム5選！安いジムや女性に人気のジムも紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.27</span><span class="txt">GOODLIFE GYM 五反野店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3470379" target="_blank">五反野周辺にあるパーソナルジムおすすめ5選！理想の体を目指そう</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.27</span><span class="txt">GOODLIFE GYM 六町店 が「<a href="https://aumo.jp/" target="_blank"> aumo</a>」の記事「<a href="https://aumo.jp/articles/3469766" target="_blank">六町駅周辺のパーソナルジムおすすめ7選！初心者向けや安いジムを紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.20</span><span class="txt">GOODLIFE GYM 十条店 が「<a href="https://fitmap.jp/" target="_blank"> Fit Map</a>」の記事「<a href="https://fitmap.jp/magazine/gym/43729/" target="_blank">十条のジムおすすめ13選｜クーポン・料金比較表・評判付き</a>に掲載されました。</span></li>
      <li><span class="day">2023.07.12</span><span class="txt">GOODLIFE GYM 福岡大橋店 が「<a href="https://playful-style.net/" target="_blank"> ぷれすた</a>」の記事「<a href="https://playful-style.net/gym-fukuoka-fukuokacity-personal/" target="_blank">福岡市でおすすめのパーソナルジム16選！安いジムや女性・ダイエットに人気のジムを厳選</a>に掲載されました。</span></li>
      <li><span class="day">2023.06.19</span><span class="txt">GOODLIFE GYM 北越谷店 が「<a href="https://fitmap.jp/" target="_blank"> FitMap</a>」の記事「<a href="https://fitmap.jp/magazine/gym/37515/" target="_blank">北越谷のジムおすすめ7選｜クーポン・料金比較表・評判付き</a>に掲載されました。</span></li>
      <li><span class="day">2023.05.09</span><span class="txt">GOODLIFE GYM 西新宿五丁目店 が「<a href="http://gym-navi.com/" target="_blank"> ジムナビ</a>」の記事「<a href="http://gym-navi.com/goodlifegym-nishishinjuku/" target="_blank">GOODLIFE GYM 西新宿五丁目店について、ジムの特徴、料金、口コミ、スタッフについて紹介</a>に掲載されました。</span></li>
      <li><span class="day">2023.04.17</span><span class="txt">GOODLIFE GYM 西新宿五丁目店 が「<a href="http://gym-navi.com/" target="_blank"> ジムナビ</a>」の記事「<a href="http://gym-navi.com/area-tokyo-shinjuku/" target="_blank">【東京】新宿のおすすめパーソナルジムを金額、サービスの質等から厳選！</a>に掲載されました。</span></li>
      <li><span class="day">2023.02.16</span><span class="txt">GOODLIFE GYM 柏店が「<a href="https://news.mynavi.jp/" target="_blank"> マイナビニュース</a>」の記事「<a href="https://news.mynavi.jp/beauty/220328/" target="_blank">【柏】パーソナルトレーニングジムおすすめ19選</a>に掲載されました。</span></li>
      <li><span class="day">2023.02.16</span><span class="txt">GOODLIFE GYM 柏店が「<a href="https://cloud-gym.com/" target="_blank"> CLOUD GYM</a>」の記事「<a href="https://cloud-gym.com/personal-fitness/archives/8032" target="_blank">【柏】パーソナルジムおすすめ12選！安いジムや女性向けのジムは？</a>に掲載されました。</span></li>
      <li><span class="day">2023.02.15</span><span class="txt">GOODLIFE GYM 柏店が「<a href="https://lyftoff.jp/" target="_blank"> LYFTOFF-WOMAN-</a>」の記事「<a href="https://lyftoff.jp/personaltraininggym-kashiwa/#rtoc-6" target="_blank">【女性専用】柏の女性向けパーソナルトレーニングジムおすすめ９選！利用者の口コミもあり</a>に掲載されました。</span></li>
      <li><span class="day">2023.02.15</span><span class="txt">GOODLIFE GYM 柏店が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF</a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-kashiwa/#index_id3" target="_blank">【2023】柏のパーソナルトレーニングジムおすすめ11選！口コミ・評判も掲載</a>に掲載されました。</span></li>
      <li><span class="day">2023.02.15</span><span class="txt">GOODLIFE GYM 柏店が「<a href="https://playful-style.net/" target="_blank"> ぷれすた</a>」の記事「<a href="https://playful-style.net/gym-chiba-kashiwa-personal/" target="_blank">柏でおすすめのパーソナルジム12選！安いジムや女性・ダイエットに人気のジムを厳選</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.27</span><span class="txt">GOODLIFE GYM 中野店が「<a href="https://playful-style.net/" target="_blank"> ぷれすた</a>」の記事「<a href="https://playful-style.net/gym-tokyo-nakano-personal/" target="_blank">中野でおすすめのパーソナルジム12選！安いジムや女性・ダイエットに人気のジムを厳選</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 西新宿五丁目店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-shinjuku/" target="_blank">【新宿】おすすめパーソナルトレーニングジム34選！女性専用あり《全65店舗あり》</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 中井駅前店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-higashinakano/" target="_blank">【東中野・落合】おすすめのジム・パーソナルトレーニングジム14選！</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 落合南長崎店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-higashinakano/" target="_blank">【東中野・落合】おすすめのジム・パーソナルトレーニングジム14選！</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 北千住店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-kitasenju/" target="_blank">【千葉】おすすめパーソナルトレーニングジム15選！女性専用あり《全54店舗》</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 千葉中央店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-chiba/" target="_blank">【北千住】おすすめパーソナルトレーニングジム16選！女性専用あり《全30店舗あり》</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 稲毛海岸店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-chiba/" target="_blank">【北千住】おすすめパーソナルトレーニングジム16選！女性専用あり《全30店舗あり》</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 小田原店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-odawara/" target="_blank">【小田原】おすすめのジム・パーソナルトレーニングジム18選！</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 小田原駅東口店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-odawara/" target="_blank">【小田原】おすすめのジム・パーソナルトレーニングジム18選！</a>に掲載されました。</span></li>
      <li><span class="day">2023.01.10</span><span class="txt">GOODLIFE GYM 北越谷店が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-koshigaya/" target="_blank">【越谷】おすすめパーソナルトレーニングジム7選！女性専用あり《全26店舗あり》</a>に掲載されました。</span></li>
      <li><span class="day">2022.10.31</span><span class="txt">GOODLIFE GYM 東日本橋が「<a href="https://kimitsu-iron.jp/" target="_blank"> B-MAKE</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-kashiwa/" target="_blank">【柏】おすすめパーソナルトレーニングジム16選！女性専用あり《全46店舗あり》</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF </a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-yoyogi5/" target="_blank">代々木のパーソナルトレーニングジムおすすめ８選【女性の口コミ・評判も比較】</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 中野野方が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF </a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-nakanocity/" target="_blank">【厳選】中野のパーソナルトレーニングジムおすすめ８選｜女性に評判＆安い料金</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 東日本橋が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF </a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-nihonbashiningyocho" target="_blank">【日本橋】パーソナルトレーニングジムおすすめ11選｜女性の口コミ・評判＆安い料金</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 浅草が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF </a>」の記事「<a href="https://trainees-supplement.com/fitnessgym-asakusa/" target="_blank">【厳選】浅草のジムおすすめ13選！女性に評判＆安い料金を掲載</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 千葉が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF</a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-chiba/" target="_blank">千葉のおすすめパーソナルトレーニングジム11選！女性にも評判で安い料金</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.18</span><span class="txt">GOODLIFE GYM 小田原が「<a href="https://trainees-supplement.com/" target="_blank"> LYFT OFF</a>」の記事「<a href="https://trainees-supplement.com/personaltraininggym-odawara/" target="_blank">小田原市のパーソナルトレーニングジムおすすめ７選！女性にも評判で安い料金</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.01</span><span class="txt">GOODLIFE GYM 浅草が「<a href="https://personalgym-jp.com/" target="_blank">パーソナルジムJP </a>」の記事「<a href="https://personalgym-jp.com/2022/04/25/goodlifegym_asakusa/" target="_blank">【2022最新版】浅草のおすすめパーソナルジム特集</a>に掲載されました。</span></li>
      <li><span class="day">2022.05.01</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://personalgym-jp.com/" target="_blank">パーソナルジムJP </a>」の記事「<a href="https://personalgym-jp.com/2022/04/25/goodlifegym-yoyogi/" target="_blank">【2022最新版】代々木のおすすめパーソナルジム特集</a>に掲載されました。</span></li>
      <li><span class="day">2022.04.14</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://zerobody.jp/" target="_blank">ZERO BODY</a>」の記事「<a href="https://zerobody.jp/articles/1917/" target="_blank"> 【厳選】代々木・千駄ヶ谷のパーソナルジムおすすめ9選！人気で料金が安いところは？</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 台東入谷が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/goodlifegym/" target="_blank"> GOODLIFE GYM（グッドライフジム） 台東入谷店の料金・営業時間・口コミ</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-yoyogi/" target="_blank"> 【代々木】おすすめのジム・パーソナルトレーニングジム17選！</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 東日本橋が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-nihonbashi/" target="_blank"> 【日本橋・人形町】おすすめパーソナルトレーニングジム9選！《全36店舗あり》</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 稲毛海岸が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-chiba/" target="_blank"> 【千葉】おすすめパーソナルトレーニングジム9選！女性専用あり《全50店舗》</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 中野野方が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-nakano/" target="_blank">【中野】おすすめパーソナルトレーニングジム10選！《全26店舗あり》</a>」に掲載されました。</span></li>
      <li><span class="day">2022.04.03</span><span class="txt">GOODLIFE GYM 小田原が「<a href="https://kimitsu-iron.jp/" target="_blank">Ｂ－ＭＡＫＥ</a>」の記事「<a href="https://kimitsu-iron.jp/media/jim-odawara/" target="_blank"> 【小田原】おすすめのジム・パーソナルトレーニングジム16選！</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.15</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://qool.jp/" target="_blank">QOOL</a>」の記事「<a href="https://qool.jp/176707" target="_blank"> 代々木でおすすめのパーソナルトレーニングジム9選。女性向け店舗あり</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.15</span><span class="txt">GOODLIFE GYM 小田原が「<a href="https://qool.jp/" target="_blank">QOOL</a>」の記事「<a href="https://qool.jp/216791" target="_blank"> 小田原でおすすめのパーソナルトレーニングジム11選</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.15</span><span class="txt">GOODLIFE GYM 東日本が「<a href="https://qool.jp/" target="_blank">QOOL</a>」の記事「<a href="https://qool.jp/213574" target="_blank"> 日本橋人形町のおすすめパーソナルトレーニングジム11選</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.15</span><span class="txt">GOODLIFE GYM 稲毛海岸が「<a href="https://qool.jp/" target="_blank">QOOL</a>」の記事「<a href="https://qool.jp/161206" target="_blank"> 千葉でおすすめのパーソナルトレーニングジム9選</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.15</span><span class="txt">GOODLIFE GYM 中野野方が「<a href="https://qool.jp/" target="_blank">QOOL</a>」の記事「<a href="https://qool.jp/178281" target="_blank"> 中野のおすすめパーソナルトレーニングジム特集</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.08</span><span class="txt">GOODLIFE GYM 中野野方が「<a href="https://playful-style.net/gym-tokyo-nakanoku-nogata/" target="_blank"> ぷれすた</a>」の記事「<a href="https://playful-style.net/gym-tokyo-nakanoku-nogata/" target="_blank"> 野方でおすすめのジムまとめ</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.08</span><span class="txt">GOODLIFE GYM 台東入谷が「<a href="https://playful-style.net/gym-tokyo-taito-iriya/" target="_blank"> ぷれすた</a>」の「<a href="https://playful-style.net/gym-tokyo-nakanoku-nogata/" target="_blank"> 入谷でおすすめのジム5選！</a>」に掲載されました。</span></li>
      <li><span class="day">2022.03.08</span><span class="txt">GOODLIFE GYM 代々木が「<a href="https://playful-style.net/gym-tokyo-yoyogi-station/" target="_blank">ぷれすた</a>」の「<a href="https://playful-style.net/gym-tokyo-nakanoku-nogata/" target="_blank"> 代々木でおすすめのジム8選！</a>」に掲載されました。</span></li>
    </ul>
  </div>
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
	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();
