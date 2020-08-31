<meta http-equiv="refresh" content="3;URL=index.php">
<?php
$c = $_POST["com"];
$akye = file_get_contents("akye.txt");
$aut = file_get_contents("auth.txt");
if ($c==$akye){
  setcookie("pt", $aut, time() + 180000000);
  
  $comment = "a";
$file = 'auth.txt';
// ファイルをオープンして既存のコンテンツを取得します

// 新しい人物をファイルに追加します
$current = $comment;
// 結果をファイルに書き出します
file_put_contents($file, $current);
  echo "正しくログオンされました。3秒後トップへ移動します";
  

  
  
}else{
  echo "エラー:やり直してください";
  
}
?>