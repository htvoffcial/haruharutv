<html>
<head><meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FEC959F6F-AF34-4A33-8743-AD3B15CB6486.jpeg?v=1595839157317" sizes="">
<title>作品展</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://unpkg.com/self-timer/dist/selftimer.min.js"></script>

<!-- promise -->
<script src="https://unpkg.com/self-timer/dist/selftimer-promise.min.js"></script>

<!-- promise-polyfill -->
<script src="https://unpkg.com/self-timer/dist/selftimer-promise-polyfill.min.js"></script>
  </head>
  <div style=""><script src="push.js"></script>
<link rel="stylesheet" type="text/css" href="push.css">

    <script> 
      function myfunc(h,m,url){
var goTo = function(){location.href = url};

//現在の時刻を秒数にする
var now = new Date();
var currentS = (now.getHours()*60 + now.getMinutes())*60 + now.getSeconds() ;

//目標時刻を秒数にする
var targetS = (h*60 + m)*60;

//あと何秒で目標時刻になるか、差を求める(秒)
var jisaS = targetS - currentS;
//マイナスならすでに 今日は目標時刻を過ぎているということなので1日加算する
if( jisaS < 0 ) jisaS += 24*60*60; //1日の秒数を加算

//確認用
       alert(jisaS);

return setTimeout( goTo, jisaS*1000);
}
myfunc("16","52","2.php");
</script>
    <a href="pre/2.php">この画面をスキップ</a>
  
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
        color:#fff;
          
}
      #idshow2{
width:100%;
       
}
</style>
    <audio src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Ftrim.EB4612FD-93FC-4F0D-95EB-624444833215%20(audio-extractor.net).mp3?v=1595842529509" id="audio"></audio>

  <script>
        function s(){
push("スライドショー","<img id='idshow1' class='fadeout' style='' src='IMG_088.gif' width='320' height='240'><img id='idshow2' class='fadein' src='IMG_0141.gif' width='320' height='240'>");
       document.getElementById('audio').play();
        }
</script>


<img id="idshow1" src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F5E0C17C6-5F89-4500-ADEB-C44E66D3F37A.gif?v=1596521385750" width="100%" height="50%">
<script type="text/javascript"><!--
myChange(); 
// --></script><div id="si">
    
    </div>
    <div style="background-image: url('https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FMIMIYAKO85_sanset20140725.jpg?v=1595490926889');color: #fff;">
      
    <hr>
 </div>
    <a href="App">はるはるアプリシリーズ</a>
    <p style="text-align: center;color:#fff;">
      <small>&copy; はるはるtv</small>
    </p>
    
  </body>
  </div>
</html>
