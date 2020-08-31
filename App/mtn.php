<meta http-equiv="refresh" content="0.5;URL=https://smn-admin.glitch.me">
<?php
$comment = "ok";
$file = 'main.txt';
// ファイルをオープンして既存のコンテンツを取得します

// 新しい人物をファイルに追加します
$current = $comment;
// 結果をファイルに書き出します
file_put_contents($file, $current);


?>