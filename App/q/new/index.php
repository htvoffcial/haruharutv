<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<title>クイズ</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F854051.png?v=1595139891765" sizes="">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<h1>
クイズを主催
</h1>
<p>
  クイズコードの作成
</p>

<form name="form2" action="new/re.php" method="get">
<p>
  クイズの内容
  </p>
  <input type="text" name="q"><select name="a">
  <option value="">答え</option>
  <option value="丸">◯</option>
  <option value="バツ">×</option>
</select><br>
  <button onclick="code()">
  クイズを主催
</button>

	<input type="hidden" name="d" value="">
</form>

<script>
  
  

  var min = 1000 ;
var max = 9999 ;

var a = Math.floor( Math.random() * (max + 1 - min) ) + min ;
  var data = a;
  alert(a);
  document.form2.d.value = a;

  

  


</script><br>

<style>
  body {
    padding:10px;
    background-image: url(https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F854051.png?v=1595139891765);
   
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