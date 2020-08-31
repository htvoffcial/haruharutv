<head>
  

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FiconDownload.cgi.png?v=1595495999276" sizes="">
    <head prefix="og: http://ogp.me/ns# website: http://ogp.me/ns/ fb# : http://ogp.me/ns/ website#">
 <meta property="og:url" content="https://smn.glitch.me/App">
 
<meta property="og:type" content="website" />
 
<meta property="og:title" content="テーマ:秋　誰も見たことがないような未来へ"/>
 
<meta property="og:description" content="<更新あり‼️>8/30　はるはるTVpro-新しくなったサイト" />
 
<meta property="og:site_name" content="はるはるTVサイト-https://smn.glitch.me" />
<meta property="og:image" content="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FC4D14FCD-361D-4A5D-B9EF-44B5E621BDCA.jpeg?v=1598766964843" />

</head>
  <div id="d">
    

     <?php
    $nai = file_get_contents("nai.txt");


  ?>
  
<?php
    $main = file_get_contents("main.txt");
$mn = file_get_contents("sougen.txt");
$filename = 'fun.txt';
  $akye = file_get_contents("akye.txt");
// ファイルを読み込み変数に格納
$d = file_get_contents($filename);
  $authcli = file_get_contents("auth.txt");
$ti = $_COOKIE['pt'];
$hi = $_COOKIE['hi'];
  $ps = $_COOKIE['sp'];
  $poi = $_COOKIE['point'];
  echo $poi,"ポイント<br>";
echo "あなたのTIFNは、",$ti,"です";
  ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<audio src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Frangeend.mp3?v=1598685521377" id="aud"></audio>
    <script>
      var ado = document.getElementById('aud');
      var id = setTimeout(countup, 1000);
      


     
      countup();
      
function countup (){
    var idc = setTimeout(countup, 1000);
    
$.ajax({
    type: "GET", //　POSTでも可
    url: "https://smn.glitch.me/App/rec.php", //　送り先
    //　渡したいデータ
    dataType : "json", //　データ形式を指定
    scriptCharset: 'utf-8' //　文字コードを指定
})

  .then(
    function( param ){　 //　paramに処理後のデータが入ってる
     if(param == ""){
         
       }else{
         
         ado.play();
       push("おしらせ・速報",param);
         
         
           clearTimeout(idc);
 
    
 

         
       } 
    },
  
  
    function( XMLHttpRequest, textStatus, errorThrown ){
        console.log( errorThrown ); //　エラー表示
});
}

   setTimeout(countup, 2000);


</script>
  <br>
  <small>※ポイントは、TIFNを発行すると利用できます<BR><a href="#tifk">TIFNでできることへ、ジャンプ</a></small>


<script>var url = location.href

if(url.indexOf('http:') >= 0) { // 判定方法の修正
  // url文字列の書き換え
  var newUrl = url.replace('http:', 'https:'); // 書き換え方法の修正

  // リダイレクト
  location.replace(newUrl);
}</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.7/push.min.js"></script>

<style>
#kotei {

  
position: fixed; /* 要素の位置を固定する */
bottom: 0; /* 基準の位置を画面の一番下に指定する */
right: 0; /* 基準の位置を画面の一番右に指定する */
width: 5em; /* 幅を指定する */
/* ボーダーを指定する */
  
}
</style><link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

<tyousei><script src="/push.js"></script>
<link rel="stylesheet" type="text/css" href="/push.css">
 
<title>メニュー-はるはるtv公式のサイト</title><meta name="description" content="はるはるサイトの公式-便利な機能や未来の技術を体験しよう-はるはる-ハルハル">
<meta name="viewport" content="width=device-width,initial-scale=1">
  </head>
  

  <script>
    </script>
  <script>

</script>
    <script src="https://smn.glitch.me/App/ace.php"></script>
  <script>
    var main = <?php echo json_encode($main); ?>;

    if (main=="ok"){
location.href="https://smn.glitch.me/App/m.php";
}
var hoge = <?php echo json_encode($d); ?>;
var cok = <?php echo json_encode($ti); ?>;

if(hoge==cok){
push("デバイス","このデバイスは紛失されたものです");
  
location.href="https://smn.glitch.me/App/gen.php";

}
  
    var ck = <?php echo json_encode($mn); ?>;   
       var nai = <?php echo json_encode($nai); ?>;
    
    if (ck==cok){
      push("TIFN","<b>管理者から</b><br>内容:"+nai);


}

var d = <?php echo json_encode($hi); ?>;
var ps = <?php echo json_encode($ps); ?>;
var authcli = <?php echo json_encode($authcli); ?>;
var akye = <?php echo json_encode($akye); ?>;
if(authcli==cok){
    push("ログイン","ログインがありました<br>認証コードは、"+akye);

}
if(d=="ok"){
push("デバイス","このデバイスは移行されました。移行時に設定したパスワードを入力してください");var pw;

pw = prompt("移行時に設定したパスワードを入力してください","");

if (pw == ps){
  document.cookie = "sp=";
  document.cookie = "hi=";
  
  
}else{
  location.href="";
}
  


}
    
    

   
    </script>    
    
  <h1>
    はるはるサイト
  </h1><p>
    8/30(日曜日)更新
    </p>
  <small>全部自作しているので是非ご覧くださいね</small><hr><small>LINEでシェア(修正済み)</small><br><div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="3" data-url="https://smn.glitch.me/App" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
 <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
  <a href="#chat">
    <img src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F95BEA6D9-99B0-4F2C-8DCE-51EE0235E007.png?v=1596586165039" id="kotei"></a>
<hr><a href="https://1drv.ms/v/s!AjqWn2hX02DPmDLyDFBCezRO6Ndp">マイクラ動画は、こちら</a>
<hr><a href="https://smn.glitch.me/App/path.php"><img src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FE8120488-B227-41AC-B237-AD9125AB043D.png?v=1597718763875" class="al"></a>
  <a href="https://smn.glitch.me/App/kei.php"><img src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F6FC1B92C-2599-4560-AD59-61F49DF6720D.png?v=1597737472039" class="al"></a>
    <hr><b>はるはるTV約5周年</b><video src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Ftrim.182697D9-CD7E-4F06-A0A9-0EDE28CBA875.MOV?v=1598516601905" height="150em" width="100%" controls playsinline muted autoplay loop></video>


  <hr><p style="background-color:red;">
      見てpoint! 1000pt
      </p><a href="https://smn.glitch.me/App/End.php" class="d">
  エンディング
</a><hr>
  <a href="https://smn.glitch.me/sa" class="d">
  作品展<p style="background-color:red;">
      **NEW!!**
      </p>
</a> <p style="background-color:red;">
      見てpoint! 10pt
      </p>
  <a href="https://smn.glitch.me/App/t" class="d">
  大切な人に伝えよう
</a> 
    <hr>
  <a href="https://haruharutv2.glitch.me" class="d">
  管理者のブログ
</a><a href="https://smn.glitch.me/anzen.php" class="d">
  安全への取り組み new
</a>
  <a href="https://3htube.glitch.me" class="d">管理者の動画</a>
  

  <a href="https://smn.glitch.me/App/scratch/" class="d">scratchゲーム</a>
  <a href="https://data-center.glitch.me" class="d">はるはるデータセンター</a>
  

  <a href="https://smn.glitch.me/pv" class="d">pv</a>
   <himo>

  
  <box>

<box>
   
  </himo>
  <script>

</script>

<footer><div id="chat">

  </div>
  
<script>
  
  </script>
  <div id="tifk">
    
  
<a href="https://smn.glitch.me/App/fun.php" class="d">TIFN使用例/発行</a>
  <a href="https://smn.glitch.me/App/kis.php" class="d">データコピー/引き継ぎ</a>
  
  </div>    <div class="b">
    <p>
  このサイトのバグ、ご意見などに関するアドバイスなどを
    お寄せください
  </p>
  <hr>
  
  
<form action = "https://smn.glitch.me/htv.php" method = "post">
<input type = "name" name ="kye" class="b" required><br/>
<button class="b">
  送信
  </button>
</form>
    </div>
</c>
<style>
.b {
  width:100%;
  font-size:12px;
  color:#FFFFFF;
  text-align:center;
  display:block;
  padding:10px 0 10px;
  background:#6BCBF6;
  border-radius: 5px;
}
  c {
    
  text-align:center;
  }
  
</style>
  
  
    </footer>
     </box>
  </himo>
    
<style>
  tyousei {}
  
  img.al{
width: 80px;
    height:20px;
    object-fit: cover;

}
  iframe {
width: 100%;
    border: 2px #008000 dashed;
}
  himo{
  cursor: url(https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Fmark_kinshi_896.png?v=1595913806515),auto;
    
  }
  div{
color:#fff;
}
  body {
    padding:0px;
    font-family: 'Russo One', sans-serif;
    background-image: url(https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FC4D14FCD-361D-4A5D-B9EF-44B5E621BDCA.jpeg?v=1598766964843);
   
  /* 画像を常に天地左右の中央に配置 */
  background-position: center center;
   
  /* 画像をタイル状に繰り返し表示しない */
  background-repeat: no-repeat;
   
  /* コンテンツの高さが画像の高さより大きい時、動かないように固定 */
  background-attachment: fixed;
   
  /* 表示するコンテナの大きさに基づいて、背景画像を調整 */
  background-size: cover;
   
  /* 背景画像が読み込まれる前に表示される背景のカラー */
  background-color: #fff;

     
text-align:center; 
    

}


  footer{


 /*←絶対位置*/
    bottom: 0; /*下に固定*/
}
  a.d { 
    text-decoration: none;
  display       : inline-block;
  border-radius :5%;          /* 角丸       */
  font-size     : 10pt;
        /* 文字サイズ */background-clip:text;
    
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 5em 15px;   /* 余白       */
  background    : #d4ff00;     /* 背景色     */
    /* 文字色     */
  line-height   : 0px;         /* 1行の高さ  */
        /* なめらか変化 */
    /* 影の設定 */
  border        : 2px solid #d4ff00;    /* 枠の指定 */
}
  h1{ 
color:#fff;

}
.button:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : #ff7f7f;     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
  }</style></tyousei>着信音:ポケットサウンドさん
     