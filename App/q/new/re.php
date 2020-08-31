<?php
header('Content-type: application/json; charset=utf-8');
$data = filter_input( INPUT_GET, 'd' );

$q = filter_input( INPUT_GET, 'q' );

$a = filter_input( INPUT_GET, 'a' );
$param = $data;
echo json_encode($param); 


$file_name = $data.".php";

  // ファイルの存在確認
  if( !file_exists($file_name) ){
    // ファイル作成
    touch( $file_name );
  }else{
    // すでにファイルが存在する為エラーとする
    echo('Warning - ファイルが存在しています。 file name:['.$file_name.']');
    exit();
  }

  // ファイルのパーティションの変更
  chmod( $file_name, 0666 );
  echo('Info - ファイル作成完了。 file name:['.$file_name.']');
$comment = "<meta name='viewport' content='width=device-width,initial-scale=1'><h1>".htmlentities($q, ENT_QUOTES, "UTF-8")."</h1><br>である丸かバツか<br><button onclick='batu()'>×</button><button onclick='maru()'>◯</button><script type='text/javascript'>var hoge = <?php echo json_encode($hoge); ?>;function batu(){if(hoge=='バツ'){alert('正解');}function maru(){if(hoge=='丸'){alert('正解');}</script>";
$filer = $data.".php";
// ファイルをオープンして既存のコンテンツを取得します
$current = file_get_contents($file);
// 新しい人物をファイルに追加します
$current .= $comment ."<br>\n";
// 結果をファイルに書き出します
file_put_contents($filer, $current);$filename = 'memo.txt';
 

