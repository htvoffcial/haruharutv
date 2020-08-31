document.write("<div id='idAlert' class='fadeout'style='background-color:#C0C0C0; visibility:hidden; position:absolute; border-width:thick; border-style:none;  rgba(0,0,0,0.5); border-radius:10px;'><div style='float:right'><div onclick='myAlertClose()''><p></p></div></div><b><div id='idAlertTitle' style='background-color:#C0C0C0; text-align:center; padding:0px 0px; border-radius:5px 5px 0px 0px; opacity:1;'></div></b><div style='margin:0px 0px 0px 0px;'><div style='display:table; float:left; width:100px; height:100px;'><style='display:table-cell;vertical-align:middle;text-align:center;'></p></div><div style='display:table; height:100px;'><div id='idAlertMessage' style='vertical-align:middle;'></div></div></div></div>");
function push(myTitle, myMessage){
	// タイトルとメッセージをセットする
	myMessage = myMessage.replace(/\n/g, "<BR>");
	document.getElementById("idAlertTitle").innerHTML = myTitle;
	document.getElementById("idAlertMessage").innerHTML = myMessage;

	// いったん上端に移動する
	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
	document.getElementById("idAlert").style.top = myY/2*(-1);

	// 中央に移動する
	myXs = document.body.scrollLeft;	
	myYs = document.body.scrollTop;
	myX = (window.innerWidth !== undefined) ? window.innerWidth : document.body.clientWidth;
	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
	document.getElementById("idAlert").style.left = myX / 2 - (myX/2/2) + myXs;
	document.getElementById("idAlert").style.top = myY / 2 - (myY/2/2) + myYs;

	// 警告画面を表示
	document.getElementById("idAlert").style.visibility = "visible";

	// フェードイン
	document.getElementById("idAlert").className = "fadein";
}

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

    sleep(5, function() {
      myAlertClose();
    });


      
      function myAlertClose(){
    	// 上端に移動する
    	myY = (window.innerHeight !== undefined) ? window.innerHeight : document.body.clientHeight;
    	document.getElementById("idAlert").style.top = myY/2*(-1);

    	// フェードアウト
    	document.getElementById("idAlert").className = "fadeout";

    	// 警告画面を隠す
    	document.getElementById("idAlert").style.visibility = "hidden";


    }