<meta http-equiv="refresh" content="1;URL=https://smn.glitch.me/End">
<?php

 
  $p = $_COOKIE['point'];
  ?>  
<script>
  var dunp = <?php echo json_encode($p); ?>;
  
  to = parseInt("1000") + parseInt(dunp);
    document.cookie = "point="+to+"; max-age=900000000000";
  </script>
