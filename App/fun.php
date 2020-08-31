  <meta name="viewport" content="width=device-width,initial-scale=1">
  <body><?php

$filename = 'fun.txt';
// ファイルを読み込み変数に格納
$d = file_get_contents($filename);

?>    <script src=""></script>
  <script>
    function sleep(a){
  var dt1 = new Date().getTime();
  var dt2 = new Date().getTime();
  while (dt2 < dt1 + a){
    dt2 = new Date().getTime();
  }
  return;
}
var hoge = <?php echo json_encode($d); ?>;
var coki = document.cookie;
    //全てのcookieを取り出して
    
    var cok = coki.substr( 3 );
 
if(hoge==cok){
push("デバイス","このデバイスは紛失されたものです");
  sleep(5000);
location.href="https://smn.glitch.me/App/gen.php";

}
    
 

   
    </script>
    
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
      <div id="bar">
    

<h2>
     

    紛失した端末の管理/ポイント用のTIFNを取得
</h2>
    </div>

  

    <p>
      TIFNをお持ちでない方
    </p>
    <button onclick="location.href='set.php'">TIFN取得</button>
    <p>
      TIFNをすでにお持ちの方
    </p>
    <button onclick="location.href='funsitu.php'">TIFNで遠隔ロック</button>
  <br>or<button onclick="location.href='goj.php'">
    自分の所有している端末全てをロック
    </button>
    <a href="kesu.php">遠隔ロックの解除</a>
  <style>
  
  #bar{
width:100%; height:10%;text-align: center;
 border:none;
background-color:lightblue;
    color:#fff;
  }
   button{
width:100%; height:15%;text-align: center;
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