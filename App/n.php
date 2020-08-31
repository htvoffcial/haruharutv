<meta http-equiv="refresh" content="0.5;URL=index.php">
<?php
$comment = "";
$file = 'nai.txt';
// ファイルをオープンして既存のコンテンツを取得します

// 新しい人物をファイルに追加します
$current = $comment;
// 結果をファイルに書き出します
file_put_contents($file, $current);
?>