// id名「menu-btn」がついた要素を捕まえて、変数「hamBtn」に入れる
const hamBtn = document.querySelector('#menu-btn');

// hamBtnが「クリック」された時に、関数（処理）を実行する
hamBtn.addEventListener('click', function () {
  // ここに実行したい命令を書く
  //alert('ボタンが押されました！');

  // 「open」というクラスがなければ付け、あれば外す（トグルな処理）
  hamBtn.classList.toggle('open');
  console.log('クラスが切り替わりました！');
});
