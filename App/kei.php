<head>
  

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title>App</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F854051.png?v=1595139891765" sizes="">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script> 
</head>
<?php 
$ps = $_COOKIE['pt'];
?>
<h1>
pc端末へ
</h1>
<p>
</p>
<p>
  モバイルではるはるサイトの使用を継続しましょう
  </p>



<script>
  
  
  // ここに読み込み完了時に実行してほしい内容を書く。



  
    $(function(){
      var ps = <?php echo json_encode($ps); ?>;
  var mit = ps;

      var qrtext = "http://smn.glitch.me/App/hg.php?="+mit;
      var utf8qrtext = unescape(encodeURIComponent(qrtext));
      $("#img-qr").html("");
      $("#img-qr").qrcode({text:utf8qrtext}); 
    });
    </script>
<div id="img-qr"></div>
  スマホやタブレットでこのQRを読み込んでください


</script><br>

<style>
  body {
    padding:10px;
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
  background-color: #fff;

text-align:center; 

}
  button {
  display       : inline-block;
  border-radius : 6%;          /* 角丸       */
  font-size     : 10pt;
        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 12px 12px;   /* 余白       */
  background    : #ff7f7f;     /* 背景色     */
    color         : #ffffff;     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
    /* 影の設定 */
  border        : 2px solid #ff7f7f;    /* 枠の指定 */
}
  h1{ 
color:#fff;

}
.button:hover {
  box-shadow    : none;        /* カーソル時の影消去 */
  color         : #ff7f7f;     /* 背景色     */
  background    : #ffffff;     /* 文字色     */
}</style>