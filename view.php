<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><link rel="apple-touch-icon" href="https://cdn.glitch.com/e3342b72-93eb-4a4c-bdae-a0166de9f522%2FiconDownload.cgi.png?v=1595495999276" sizes="">
<meta name="viewport" content="width=360,initial-scale=1">
<meta http-equiv="Refresh" content="20">
<p>
  このサイトではリアルタイムぽく見せるために、自動的に20秒に一度更新しています
</p>
<a href="text.txt" download="text.txt">結果をダウンロード</a>

<a href="res.php">リセット</a><br>
<?php
echo 'どのサイトで<hr><div style="background-color:#EDF7FF;">';
$data = file_get_contents( 'ace-page.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo '<hr></div>';

echo 'ip<hr><div style="background-color:#befc03;color:#fff;">';
$data = file_get_contents( 'App/ace-ip.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );

for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo '<hr></div>';
echo '日時<hr>';
$data = file_get_contents( 'App/ace-time.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo 'ユーザー情報<hr><div style="background-color:#befc03;color:#fff;">';
$data = file_get_contents( 'App/ace-user.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo '<hr></div>';

echo 'その他<hr><div style="background-color:#EDF7FF;">';
$data = file_get_contents( 'App/ua.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo '<hr></div>';

echo 'tifn<hr><div style="background-color:#EDF7FF;">';
$data = file_get_contents( 'App/au.txt' );
$data = explode( "\ｎ", $data );
$cnt = count( $data );
for( $i=0;$i<$cnt;$i++ )
{
echo($data[$i]);
}
echo '<hr></div>';

