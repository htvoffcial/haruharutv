<?php
define("TESTFILE","./time.txt");
  $fh = fopen(TESTFILE, "r");


  while (($line = fgets($fh))) {
    echo $line;
  }

  fclose($fh);



?>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
  </head>
  <style>
    #logo{
      width:15%;
      height:15%;
    }
      iframe{
      width:100%;
        
        
      height:90%;
    } 
    video{
      width:100%;
        
        
      height:50%;
    } 
    
       #login{
      width:15%;
        margin-left: 10em;
        margin-right: 0px;
      height:15%;
    }
  
</style>
<body><video src="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2Ftrim.B62985E0-398B-4F56-85B8-AAF1D565392F.MOV?v=1595587213100" id="video" playsinline width="100%" controls></video>
<button onclick="go()">
  再生
  </button>
  <script>
  function go(){
var video = document.getElementById("video");
 var line = <?php echo json_encode($line); ?>; 
 var Hour = now.getHours();
  var Min = now.getMinutes();
  var Sec = now.getSeconds();
 var lin = Hour+":"+Min+":"+Sec;
var time = parseInt(line)+parseInt(lin);
    video.play();
    video.currentTime = time;
    
  }
</script>
  </body>   
</html>