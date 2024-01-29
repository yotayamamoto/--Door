$('.humburger').click(function(){
    $(this).toggleClass('open'); 
    $(".sp_nav").toggleClass('open'); 
})
$('.sp_menu').click(function(){
    $('.humburger').toggleClass('open'); 
    $('.sp_nav').toggleClass('open'); 
})

$(document).ready(function(){
    $('.gallery_slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        arrows:false,
        autoplay:true,
        speed:1500,
        fade:true
    });
})

// テキストアニメーション
function EachTextAnimeControl() {
    $('.eachTextAnime').each(function () {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("appeartext");
  
      } else {
        $(this).removeClass("appeartext");
      }
    });
}

function EachTextAnimeControl_2() {
    $('.appearFade').each(function () {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("fade");
  
      } else {
        $(this).removeClass("fade");
      }
    });
}
$(window).scroll(function () {
    EachTextAnimeControl();
    EachTextAnimeControl_2();
  });

$(window).on('load', function () {
    var element = $(".eachTextAnime");
    element.each(function () {
      var text = $(this).text();
      var textbox = "";
      text.split('').forEach(function (t, i) {
        if (t !== " ") {
          if (i < 10) {
            textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
          } else {
            var n = i / 10;
            textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
          }
  
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });
  
    EachTextAnimeControl();
  });
// テキストアニメーション

// スムーススクロール
$(function(){
    $('a[href^="#"]').click(function(){
      let adjust = 0;//スクロール一の調整値
      let speed = 400;
      let href= $(this).attr("href");//aタグのhrefを取得
      let target = $(href == "#" || href == "" ? 'html' : href);
      let position = target.offset().top - adjust;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
});
// スムーススクロール

// クラス切り替え
window.addEventListener("scroll", function () {
    const element = document.getElementById("contact");
    const scroll = window.pageYOffset;
    if (scroll > 600) {
        if (element.classList.contains("contact_area")) {
            element.classList.remove("contact_area");
            element.classList.add("contact_fixed");
        }
    } else {
        element.classList.remove("contact_fixed");
        element.classList.add("contact_area");
    }
});
// クラス切り替え

// ヘッダー表示非表示
$(function(){
    var pos = 0;
    var header = $('.header_top');
    var contact = $('#contact');
    $(window).on('scroll', function(){
      if($(this).scrollTop() < pos || $(this).scrollTop() < 700){
        header.slideDown();
        contact.slideDown();
      }else{
        header.slideUp();
        contact.slideUp();
      }
      pos = $(this).scrollTop();
    });
});
// ヘッダー表示非表示