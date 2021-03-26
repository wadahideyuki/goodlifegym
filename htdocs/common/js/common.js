$(document).ready(function () {
  //ユーザーエージェントによる振分
  var userAgent = window.navigator.userAgent.toLowerCase();
  var appVersion = window.navigator.appVersion.toLowerCase();
  if (userAgent.indexOf("msie") > -1) { }
  if (userAgent.indexOf("firefox") > -1) { }
  if (userAgent.indexOf("chrome") > -1) { }
  if (userAgent.indexOf("iphone") > -1) { }
  if (userAgent.indexOf("android") > -1) { }
  if (appVersion.indexOf("msie 7.") != -1) { }
  var ipad = userAgent.indexOf('ipad') > -1 || userAgent.indexOf('macintosh') > -1 && 'ontouchend' in document;
  if (ipad == true) {
    //viewportの設定
    $('meta[name="viewport"]').attr("content", "width=1200px");
  }

  $(".ytCBox").colorbox({
    iframe: true,
    opacity: 0.5,
    innerWidth: 947,
    innerHeight: 600,
    maxWidth: "90%",
    maxHeight: "90%"
  });
  //画像複数
  $(".mdlImgGroup1").colorbox({
    opacity: 0.5,
    rel: "group1",
    maxWidth: "90%",
    maxHeight: "90%"
  });
  //SPのみ
  var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) || ua.indexOf('Windows Phone') > 0) {
    $(".aboutBox ul").slick({
      arrows: false,
      adaptiveHeight: true,
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }

  if($(".photoZone").length){
    $(".photoZone ul").slick({
      arrows: true,
      dots: true,
      infinite: true,
      centerMode: true,
      variableWidth: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }

  $(".voiceBox ul").slick({
    arrows: true,
    dots: true,
    infinite: true,
    centerMode: true,
    variableWidth: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          arrows: false,
          adaptiveHeight: true,
          dots: true
        }
      }
    ]
  });

  //クリックスクロール
  function clkScrl(btn, pos) {
    btn.click(function () {
      var speed = 400; // ミリ秒
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $("html, body").animate({
        scrollTop: position + pos
      }, speed, "swing");
      return false;
    });
  }
  clkScrl($(".menu a"), 0);


  /*--------------------
    フォームパーツ
  --------------------*/
  //selectのplaceholder
  $(".u-selectWrap select").change(function () {
    if ($(this).prop("selectedIndex") == 0) {
      $(this).addClass("ph");
    } else {
      $(this).removeClass("ph");
    }
  });
  $(".faqZone dt").click(function () {
    $(this).toggleClass("on");
    $(this).next().slideToggle();
  })



});//DocRdyFncEnd