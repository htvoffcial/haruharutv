<meta name="viewport" content="width=360,initial-scale=1">
<meta http-equiv="refresh" content="0.5;URL=vi.php">
<?php
$comment = ' ';
$file = 'App/ace-time.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);

$comment = ' ';
$file = 'App/ace-ip.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);


$comment = ' ';
$file = 'App/au.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);



$comment = ' ';
$file = 'ace-page.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);

$comment = ' ';
$file = 'App/ace-user.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);


$comment = ' ';
$file = 'text.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);

$comment = ' ';
$file = 'App/ua.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $comment);
