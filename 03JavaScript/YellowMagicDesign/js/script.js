// $(document).ready(function () {
//     alert('jQuery動作テスト');
// });

// AOS.jsの起動
AOS.init();

$(function () {
  // Slickの設定（スライダーにしたいタグのセレクタを指定）
  $('.slider01').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
  });
});
