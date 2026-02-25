$(function () {
  //alert('jQuery動作しています');

  ///////////////////////////////////
  // jQueryでハンバーガーメニューの操作
  ///////////////////////////////////

  // ボタンをクリックしたら、
  // // navタグの所にis-openクラス名をつけはずし
  $('#js-gnav-button').on('click', function () {
    $('#js-gnav').toggleClass('is-open');
  });

  // メニューリスト内のどこかをクリックしたら、メニューが引っ込む
  $('#js-gnav-list').on('click', function () {
    $('#js-gnav').removeClass('is-open');
  });
});
