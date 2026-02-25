// 要素を取得
const btn = document.querySelector('.menu-btn');
const menu = document.querySelector('.nav-menu');

// ボタンがクリックされた時の処理
btn.addEventListener('click', function () {
  // ボタンとメニューの両方にクラスを付け外しする
  menu.classList.toggle('open');
});

// // ボタンがクリックされた時の処理
menu.addEventListener('click', function () {
  // ボタンとメニューの両方にクラスを付け外しする
  menu.classList.toggle('open');
});
