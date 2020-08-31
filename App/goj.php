<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title>App</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F854051.png?v=1595139891765" sizes="">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<?php 
$ps = $_COOKIE['pt'];
?>
<h1>
端末処理
</h1>
<p>
</p>
<p>
  自分が所有している端末全てを制限しますか？
  </p>
<form name="form2" action="https://smn.glitch.me/App/htv.php" method="post">

  <button>
  はい
</button>

	<input type="hidden" name="kye" value="">
</form>

<script>
  
  window.onload = function () {
  // ここに読み込み完了時に実行してほしい内容を書く。


var ps = <?php echo json_encode($ps); ?>;
  document.form2.kye.value = ps;

  };  

  


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