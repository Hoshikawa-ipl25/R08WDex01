//////////////////////////////////////////////
///// 使うHTML要素の部分を、定数・変数に設定 ////
//////////////////////////////////////////////

// 夜モードボタンを捕まえる
const btnNight = document.querySelector('.btn-night');

//bodyタグを捕まえる
const bodyTag = document.querySelector('body');

// 昼モードボタンを捕まえる
const btnDay = document.querySelector('.btn-day');

// h1タグ#greeting の箇所を捕まえる
const greeting = document.querySelector('#greeting');

// 変数・定数の中身、ちゃんとはいってるか確認したい時は、
// console.logで一時的に見てみましょう
// console.log(greeting);

////////////////////////////////////////
///// HTMLを操作する（DOM操作）記述 //////
////////////////////////////////////////

// イベント：夜ボタンクリックしたら、を作る
btnNight.addEventListener('click', function () {
  // bodyタグにて .night-mode をクラス名一覧に追加する(add)
  bodyTag.classList.add('night-mode');
  // 見出しの文字を変える
  greeting.textContent = 'こんばんは';
});

// イベント：昼ボタンをクリックしたら
btnDay.addEventListener('click', function () {
  //bodyタグにて .night-mode をクラス名一覧からはずす(remove)
  bodyTag.classList.remove('night-mode');
  // 見出しの文字を変える
  greeting.textContent = 'こんにちは';
});
