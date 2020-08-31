<h1>
  TIFNが正しく引き継がれました
</h1><p>
  トップへ、戻るのでtifnが変わっていることを確認してください
</p>
<meta http-equiv="refresh" content="0.5;URL=rite.php">
<?php
$filename = 'tifn.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
 
  // ファイルを読み込んだ変数を出力
  echo $txt.'<br>';
 
}
 


// fcloseでファイルを閉じる
fclose($fp);	






 $time = time() + 36000000;

setcookie("pt", $txt, $time);

setcookie("hi", "ok"); 



$comment = " ";
$file = 'tifn.txt';
// ファイルをオープンして既存のコンテンツを取得します

// 新しい人物をファイルに追加します
$current = $comment;
// 結果をファイルに書き出します
file_put_contents($file, $current);

?>