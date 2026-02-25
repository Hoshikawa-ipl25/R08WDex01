//////////////////////////////////////
// バニラJavaScriptでのクラス名操作
//////////////////////////////////////

// ボタンを操作できるように、定数に取得
const gnavButton = document.querySelector('#js-gnav-button');

// メニューオープンした時に動きの影響のある要素全体を囲むところに.is-openをつけるため、idを割り振って読み込み
const gnav = document.querySelector('#js-gnav');

// メニューリスト<ul>タグを取得。クリックしたときの挙動が書けるようになる。
const gnavList = document.querySelector('#js-gnav-list');

// ボタンをクリックしたら、
gnavButton.addEventListener('click', function () {
  // navタグの所にis-openクラス名をつけはずし
  gnav.classList.toggle('is-open');
});

// メニューリスト内のどこかをクリックしたら、メニューが引っ込む
gnavList.addEventListener('click', function () {
  // navタグの所にis-openクラス名を削除
  gnav.classList.remove('is-open');
});
