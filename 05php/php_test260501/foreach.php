<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPテスト foreach文</title>
</head>

<body>
  <h2>foreach文のテスト</h2>
  <?php
  $fruits = ['りんご', 'みかん', 'なし', 'すいか', 'メロン'];
  foreach ($fruits as $value) { //$value ←ここは自分で好きな変数名をつけられるが、思いつかなければ $value とか、配列名にしたものの単数形とかで
    echo $value . '<br>';
  }
  ?>

  <h2>foreach文 連想配列の取り出し</h2>
  <?php
  $fruits = [
    'apple' => 'りんご',  // appleのことを「キー」、りんごのことを「値（バリュー）」
    'orange' => 'みかん',
    'paer' => 'なし',
    'strawberry' => 'いちご'
  ];
  // echo $fruits['apple'];
  foreach ($fruits as $key => $value) {
    echo  $key . ' は、' . $value . 'です。<br>';
  }

  ?>

  <h2>HTML内でforeachを、PHPブロックとHTMLブロックを分けて記述する</h2>
  <?php
  // 配列
  $machines = [
    ['name' => 'ファミリーコンピューター', 'brand' => '任天堂', 'year' => 1983],
    ['name' => 'メガドライブ', 'brand' => 'セガ', 'year' => 1988],
    ['name' => 'ネオジオ', 'brand' => 'SNK', 'year' => 1990],
  ];
  ?>
  <ul>
    <?php foreach ($machines as $machine): ?>
      <li><?= $machine['name'] . " - {$machine['brand']} " . "({$machine['year']})"; ?></li>
    <?php endforeach; ?>
  </ul>


</body>


</html>