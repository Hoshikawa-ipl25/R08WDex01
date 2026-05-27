<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>[出力結果]入力フォーム - PHP Sample Programs</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  echo 'ようこそ、', $_REQUEST['user'], 'さん。';
  echo 'あなたのメアドは', $_REQUEST['email'], 'です。';
  ?>
</body>

</html>