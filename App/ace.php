

<?php

$comment = date("Y月m日d H:i:s");
$file = 'ace-time.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);




$comment = $_SERVER["HTTP_X_FORWARDED_FOR"];
$file = 'ace-ip.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_POST['ur'];
$file = 'ace-page.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_SERVER['HTTP_USER_AGENT'];
$file = 'ace-user.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<hr>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_COOKIE["pt"];
$file = 'au.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= "*****".$comment ."<hr>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);






$comment = date("Y月m日d H:i:s");
$file = 'text.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_SERVER["HTTP_X_FORWARDED_FOR"];
$file = 'text.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_POST['ur'];
$file = 'text.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);

$comment = $_SERVER['HTTP_USER_AGENT'];
$file = 'text.txt';
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<hr>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);


 

$comment = $_POST['window'];
$file = 'ua.txt';





// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."その他<hr>\n";
// 結果をファイルに書き出します
file_put_contents($file, $current);
