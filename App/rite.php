<h1>
  TIFNが正しく引き継がれました
</h1><p>
  トップへ、戻るのでtifnが変わっていることを確認してください
</p>
<meta http-equiv="refresh" content="0.5;URL=ri.php">
<?php

$filename = 'ps.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、変数に格納
  $tx = fgets($fp);
 
  // ファイルを読み込んだ変数を出力
 
}
 
// fcloseでファイルを閉じる
fclose($fp);	
setcookie("sp", $tx);
?>