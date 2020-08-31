<html>
<head><meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FEC959F6F-AF34-4A33-8743-AD3B15CB6486.jpeg?v=1595839157317" sizes="">
<title>作品展</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  </head>
  <div style=""><script src="push.js"></script>
<link rel="stylesheet" type="text/css" href="push.css">

        
    
  
  <body>
    <style type="text/css">
.fadeout{
opacity: 0;
transition: 3s ease-in-out;
-webkit-transition: 3s ease-in-out;
}
.fadein{
opacity: 1;
transition: 3s ease-in-out;
-webkit-transition: 3s ease-in-out;
}
      #idshow1{
width:100%;
}
         .tai{
width:2em;
           height:2em;
}   
      .img{
width:20em;
           height:20em;
}   
      body{
background-color:#000;
}
      #idshow2{
width:100%;
       
}
</style>
    <audio src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Ftrim.EB4612FD-93FC-4F0D-95EB-624444833215%20(audio-extractor.net).mp3?v=1595842529509" id="audio"></audio>
    <button onclick="s()">
      スライドショー
    </button>
  <script>
        function s(){
push("スライドショー","<img id='idshow1' class='fadeout' style='' src='IMG_088.gif' width='320' height='240'><img id='idshow2' class='fadein' src='IMG_0141.gif' width='320' height='240'>");
       document.getElementById('audio').play();
        }
</script>
<script type="text/javascript"><!--
myImage = new Array(	// 画像ファイル名の設定
  "https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FEC959F6F-AF34-4A33-8743-AD3B15CB6486.jpeg?v=1595839157317",
"https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F5BA0A1F2-9EDD-4962-B4D1-E83FBBA1F28E.jpeg?v=1595490044364",		// 鯉
"https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FD0F57DAB-53B5-4391-9D8D-C9E4F373DBE4.jpeg?v=1595490424148"	// 滝
	// 橋
	// 山
);	
myNowCnt = -1;		// 現在表示している配列番号
myflg = 0;		// どっちを表示して、どっちを消すかのフラグ
function myChange(){	// スライドショーメイン関数
	myNowCnt = (myNowCnt<myImage.length-1) ? myNowCnt+1 : 0;		// 次の配列番号
	myflg = (myflg==0) ? 1 : 0;						// 表示・非表示フラグ反転
	if (myflg == 0){
		document.getElementById("idshow1").src = myImage[myNowCnt];		// 次の画像をセットする
		document.getElementById("idshow1").className = "fadein";		// フェードイン
		document.getElementById("idshow2").className = "fadeout";	// フェードアウト
	}else{
		document.getElementById("idshow2").src = myImage[myNowCnt];		// 次の画像をセットする
		document.getElementById("idshow1").className = "fadeout";	// フェードアウト
		document.getElementById("idshow2").className = "fadein";		// フェードイン
	}
	setTimeout( "myChange()" , 4000 );					// 4秒周期に画像を更新する
}	
// --></script>
<div style="border-width:8px; rgba(0,0,0,0.5); border-color:#800000; width:320px;">
<img id="idshow1" class="fadeout" style="position:absolute;" src="IMG_088.gif" width="320" height="240">
<img id="idshow2" class="fadein" src="IMG_0141.gif" width="320" height="240">
</div>
<script type="text/javascript"><!--
myChange(); 
// --></script>
    <div style="background-image: url('https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FMIMIYAKO85_sanset20140725.jpg?v=1595490926889');color: #fff;">
      
<h1>
  学校をきれいにしましょう
      </h1>
    <a href="App">はるはるアプリシリーズ</a>
    <p style="text-align: center;color:#fff;">
      <small>&copy; はるはるtv</small>
    </p>
    
  </body>
  </div>
</html>
