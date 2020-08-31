<meta name="viewport" content="width=360,initial-scale=1">

<?php
echo 'どれだけ<hr>';
$data = file_get_contents( 'htv.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}

