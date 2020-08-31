  <meta name="viewport" content="width=device-width,initial-scale=1">
  <body><?php

$filename = 'fun.txt';
// ファイルを読み込み変数に格納
$d = file_get_contents($filename);

?>    <script src="push.js"></script>
  <script>
    
var hoge = <?php echo json_encode($d); ?>;
var coki = document.cookie;
    //全てのcookieを取り出して
    
    var cok = coki.substr( 3 );
 
if(hoge==cok){
push("デバイス","このデバイスは紛失されたものです");
  
location.href="https://smn.glitch.me/App/gen.php";

}
    
 

   
    </script>
    
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
      <div id="bar">
    

<h2>
     

    機種変更-引き継ぎ設定
</h2>
    </div>

  <h2>
    この機能は2台(もともと使用している端末•引き継ぐ
    
    端末)が必要です
    
    </h2>
    
    <hr>
    

    
    <p>
      もともと使用している端末はこちら↓
    </p>
    <button onclick="location.href='set2.php'">引き継ぐための準備(1)</button>
    <p>
      引き継ぐ端末はこちら↓
    </p>
    <button onclick="location.href='jus.php'">新しく使う準備(2)</button>
    <small>
      ※先に(1)から実行してください
    </small>
  <style>
  
  #bar{
width:100%; height:10%;text-align: center;
 border:none;
background-color:lightblue;
    color:#fff;
  }
   button{
width:100%; height:10%;text-align: center;
 border:1px solid none;
background-color:red;
    color:#fff;
  }
       button{

         text-align: center;

  }
       input{
width:100%; height:10%;text-align: center;
 border:1px solid none;
background-color:lightblue;
    color:#fff;
  }
  body{font-family: 'Nunito', sans-serif;
    background-image: url(https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F1075252.png?v=1596411745181);
   
  /* 画像を常に天地左右の中央に配置 */
  background-position: center center;
   
  /* 画像をタイル状に繰り返し表示しない */
  background-repeat: no-repeat;
   
  /* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
  background-attachment: fixed;
   
  /* 表示するコンテナの大きさに基づいて、背景画像を調整 */
  background-size: cover;
   
  /* 背景画像が読み込まれる前に表示される背景のカラー */
  background-color: #464646;


}
</style>
</body>