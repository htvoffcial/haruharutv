<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FMIMIYAKO85_sanset20140725.jpg?v=1595490926889" sizes="">
<?php 
$ps = $_COOKIE['pt'];
?>
<div id="b">
  <style type="text/css">
    @media (prefers-color-scheme: dark) {
  body {
    background-color: #000;
    color: #fff;
  }
}
    
    .fadeout {
      opacity: 0;
      transition: 0.5s ease-in-out;
      -webkit-transition: 0.5s ease-in-out;
    }
    .fadein {
      opacity: 1;
      transition: 0.5s ease-in-out;
      -webkit-transition: 0.5s ease-in-out;
    }
  </style>
  <script type="text/javascript">
    <!--
      function push(myTitle, myMessage){
    	// タイトルとメッセージをセットする
    	myMessage = myMessage.replace(/\n/g, "<BR>");
    	document.getElementById("idAlertTitle").innerHTML = myTitle;
    	document.getElementById("idAlertMessage").innerHTML = myMessage;

    	// いったん上端に移動する
    	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
    	document.getElementById("idAlert").style.top = myY/2*(-1);

    myXs = document.body.scrollLeft;
    	myYs = document.body.scrollTop;
    	myX = (window.innerWidth !== undefined) ? window.innerWidth : document.body.clientWidth;
    	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
    	document.getElementById("idAlert").style.left = myX / 2 - (myX/2/2) + myXs;
    	document.getElementById("idAlert").style.top = myY / 2 - (myY/2/2) + myYs;
        document.getElementById("idAlert").style.visibility = "visible";

    	// フェードインhjjj
    	document.getElementById("idAlert").className = "fadein";
      function sleep(waitSec, callbackFunc) {

      var spanedSec = 0;
        var waitFunc = function () {

          spanedSec++;

          if (spanedSec >= waitSec) {
              if (callbackFunc) callbackFunc();
              return;
          }

          clearTimeout(id);
          id = setTimeout(waitFunc, 1000);

      }; var id = setTimeout(waitFunc, 1000);

    }

    sleep(3, function() {
      myAlertClose();
    });


      }
      function myAlertClose(){
    	// 上端に移動する
    	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
    	document.getElementById("idAlert").style.top = myY/2*(-1);

    	// フェードアウト
    	document.getElementById("idAlert").className = "fadeout";

    	// 警告画面を隠す
    	document.getElementById("idAlert").style.visibility = "hidden";


    }
    // -->
  </script>
  <div
    id="idAlert"
    class="fadeout"
    style="background-color:#C0C0C0; visibility:hidden; position:absolute; border-width:thick; border-style:none;  rgba(0,0,0,0.5); border-radius:10px; opacity:0.7;"
  >
    <div style="float:right">
      <div onclick="myAlertClose()"><p></p></div>
    </div>
    <b
      ><div
        id="idAlertTitle"
        style="background-color:#C0C0C0; text-align:center; padding:0px 0px; border-radius:5px 5px 0px 0px; opacity:1;"
      ></div
    ></b>
    <div style="margin:0px 0px 0px 0px;">
      <div style="display:table; float:left; width:100px; height:100px;">
        <p
          style="display:table-cell;vertical-align:middle;text-align:center;"
        ></p>
      </div>
      <div style="display:table; height:100px;">
        <div id="idAlertMessage" style="vertical-align:middle;"></div>
        
      </div>
    </div>
    <div style="padding:0px 0px; text-align:center;"></div>
  </div>
  <title>値段を指定</title>

  <head>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <audio
      src="https://cdn.glitch.com/f4e12fbd-8638-43b5-a099-6058360238c8%2Fdecision4.mp3?v=1594544852901"
      id="audio"
    ></audio>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/1.3.1/jquery.pnotify.min.js"
    ></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/1.3.1/jquery.pnotify.default.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Include this file if you are using PIcons. -->
    <link
      href="jquery.pnotify.default.icons.css"
      media="all"
      rel="stylesheet"
      type="text/css"
    />
    <style>
      /* === ボタンを表示するエリア ============================== */
      .sample2Area {
        margin: auto;

        width: 100px; /* ボタンの横幅       */
      }

      /* === チェックボックス ==================================== */
      .sample2Area input[type="checkbox"] {
        display: none; /* チェックボックス非表示 */
      }

      /* === チェックボックスのラベル（標準） ==================== */
      .sample2Area label {
        display: block; /* ボックス要素に変更 */
        box-sizing: border-box; /* 枠線を含んだサイズ */
        text-align: left; /* 文字位置は中央     */
        border: 2px solid #78bd78; /* 枠線               */
        border-radius: 3px; /* 角丸               */
        line-height: 1; /* 1行の高さ          */
        height: 50px; /* ボタンの高さ       */
      }

      /* === 移動BOX（標準） ===================================== */
      .sample2Area #sample2box {
        display: inline-block;
        height: 46px; /* ボタンの高さ       */
        width: 50%; /* ボタンの高さ       */
        background: #ddd; /* 背景色             */
        transition: 0.3s; /* ゆっくり変化       */
      }

      /* === ON側のチェックボックスの移動BOX（ONのとき） ========= */
      .sample2Area #sample2check:checked + label #sample2box {
        transform: translateX(100%); /* BOXを右に移動      */
        background: #78bd78; /* 背景色             */
      }
    </style>
    <script src="https://code.jquery.com/jquery-1.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
  </head>
  
    
  </div>

  <meta name="viewport" content="width=device-width,initial-scale=1" />
 
      <style>
        #han {
          height: 20px;
          width: 20px;
        }
      </style>
    
 
  <script type="text/javascript">
    
    
    
    
    
    var asa = function() {
      var asaa = document.getElementById("sample2check").checked;

      if (asaa == true) {
        var obj = document.getElementById("b");
        obj.style.color = "#ffffff"; //文字色を白にする
        obj.style.backgroundColor = "#000"; //背景色を赤にする
      } else {
        var obj = document.getElementById("b");
        obj.style.color = "#000"; //文字色を白にする
        obj.style.backgroundColor = "#fff"; //背景色を赤にする
      }
    };
    var bookTitle;

    function kannsei() {
      
      clickBtn7();
      // 値を取得
      const aco = document.getElementById("acounnt").value;
      var ur = bookTitle + aco;

      const p1 = document.getElementById("p1");
      if (p1.style.display == "block") {
        // noneで非表示
        p1.style.display = "none";
      } else {
        // blockで表示
        p1.style.display = "block";
      }
    }
    
    function clickBtn7() {
      // 値を取得
      const aco = document.getElementById("acounnt").value;
      var ur = aco;
      var ff = ur;
      
      var qrtext = ff;
      

      
      
      push("loading...", "<img src='https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F1A5DD012-1C10-40A7-9EA1-DEADCEFAE5DC.gif?v=1596875213297'>");
      var utf8qrtext = unescape(encodeURIComponent(qrtext));
      $("#img-qr").html("");
      $("#img-qr").qrcode({ text: utf8qrtext });
    }
    document.getElementById("p1").style.display = "none";
    function LinkClick(param) {
      var elem = document.getElementById("image01");

      switch (param) {
        case 0:
          elem.src =
            "https://cdn.glitch.com/f4e12fbd-8638-43b5-a099-6058360238c8%2Funtitled.png?v=1589172265353";
          bookTitle = "1";
          break;
        case 1:
          elem.src =
            "https://cdn.glitch.com/f4e12fbd-8638-43b5-a099-6058360238c8%2F%E3%81%8A%E3%82%81%E3%81%A7%E3%81%A8%E3%81%86.png?v=1589170659080";
          bookTitle = "2";
          break;
        case 2:
          elem.src =
            "https://cdn.glitch.com/f4e12fbd-8638-43b5-a099-6058360238c8%2Fpaint.png?v=1589180286482";
          bookTitle = "3";
          break;
        case 3:
          elem.src =
            "https://cdn.glitch.com/f4e12fbd-8638-43b5-a099-6058360238c8%2Ftrim.ED922F3A-D492-4A2C-B3DB-DD35F39FA57C.MOV?v=1594276587969";
          bookTitle = "4";
          break;
        case 4:
          elem.src = "img/win10.jpg";
          break;
        default:
          elem.src = "img/win10.jpg";
          break;
      }
    }
  </script>
  
  
  <hr /><script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
</script>

  <h1>
   お店のqrコードを読み込んでください
  </h1><input type="text" size="16" placeholder="Tracking Code" class="qrcode-text"><label class="qrcode-text-btn"><input type="file" accept="image/*" capture="environment" onchange="openQRCamera(this);" tabindex="-1"></label> 
<input type="button" value="Go" disabled>
<script>function openQRCamera(node) {
    var d = <?php echo json_encode($ps); ?>;
  var reader = new FileReader();
  reader.onload = function() {
    node.value = "";
    qrcode.callback = function(res) {
      if(res instanceof Error) {
        alert("エラーでスキャン出来ませんでした");
      } else {
        node.parentNode.previousElementSibling.value = res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
    var x = d-res;
    alert(x);
}



</script>
  <style>
    #acounnt {
  position: relative;
  display: inline-block;
  font-weight: bold;
  padding: 0.25em 0.em;
  text-decoration: none;
  color: #FFF;
  background: #00bcd4;
  transition: .4s;
}




    .kakomi-box1 {
      margin: 2em auto;
      padding: 1em;
      width: 90%;
      background-color: #fff; /* 背景色 */
      border: 1px solid lightskyblue; /* 枠線 */
    }
    img {
      width: 100%;
    }
    h1 {
      color: green;
      font-size: 150%;
      text-align: center;
    }
    .btn-flat-border {
      display: inline-block;
      padding: 10% 0.2vm;
      text-decoration: none;
      color: green;
      border: solid 2px lightgreen;
      border-radius: 3px;
      transition: 0.4s;
    }
    .btn-flat-border:hover {
      background: lightgreen;
      color: white;
    }

    .button {
      display: inline-block;
      font-size: 13pt; /* 文字サイズ */
      text-align: center; /* 文字位置   */
      cursor: pointer; /* カーソル   */
      padding: 12px 12px; /* 余白       */
      background: #66ff66; /* 背景色     */
      color: #ffffff; /* 文字色     */
      line-height: 1em; /* 1行の高さ  */
      transition: 0.3s; /* なめらか変化 */
      /* 影の設定 */
      border: 2px solid #66ff66; /* 枠の指定 */
    }
    .button:hover {
      box-shadow: none; /* カーソル時の影消去 */
      color: #66ff66; /* 背景色     */
      background: #ffffff; /* 文字色     */
    }
    body {
      background-image: url(https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2F3657169_s.jpg?v=1596876113625);
   
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
      text-align: center;

}
  </style>
<hr>
<small>QRコード　は、DENSOウェーブの商標又は登録商標です</small>