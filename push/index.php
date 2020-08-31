<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  </head>
  <div style="">
    
  
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
<script type="text/javascript"><!--
myImage = new Array(	// 画像ファイル名の設定
"https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F5BA0A1F2-9EDD-4962-B4D1-E83FBBA1F28E.jpeg?v=1595490044364",		// 鯉
"https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FD0F57DAB-53B5-4391-9D8D-C9E4F373DBE4.jpeg?v=1595490424148",		// 滝
"IMG_0400.gif",		// 石仏
"IMG_0667.gif",		// 橋
"IMG_0679.gif"		// 山
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

<script type="text/javascript"><!--
myChange(); 
// --></script>
    <div style="background-image: url('https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FMIMIYAKO85_sanset20140725.jpg?v=1595490926889');color: #fff;">
      
    <hr>
<h1>
  簡単に
    </h1><hr>

<b>二行書くだけ</b>
      
<p>
  cdnを利用してもいいし、
      </p>
     <hr>
<h2>
  
      </h2>
    
    </div>
    <a href="App">はるはるアプリシリーズ</a>
    <p style="text-align: center;color:#fff;">
      <small>&copy; はるはるtv</small>
    </p>
    
  </body>
  </div>
</html>
