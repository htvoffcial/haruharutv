  <meta name="viewport" content="width=device-width,initial-scale=1">
  <body>
    
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">
      <div id="bar">
    

<h2>
     

     TIFNの設定
</h2>
    </div>
   
  
<script>window.onload = function() {
  
  var ra = Math.floor( Math.random () * 199999) + 100000;
  
  var target = document.getElementById("r");
            target.innerHTML = "<p>あなたのTIFNは<b>"+ra+"</b></p>";
    document.cookie = "pt=; max-age=0";
    document.cookie = "pt="+ra+"; max-age=900000000000";
     document.cookie = "point=; max-age=0";
    document.cookie = "point=1; max-age=900000000000";
  };
</script>
<div id="r">
  
</div>
    <button onclick="location.href='ok.php';">
      次へ
    </button>
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