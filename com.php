<meta name="viewport" content="width=360,initial-scale=1">
<meta http-equiv="refresh" content="3;URL=com.txt>
  <h1>
  完了しました
</h1>
<p>
  3秒後に元のページへジャンプします
</p>
<?php
$comment = $_POST["com"];
$file = 'com.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);
e