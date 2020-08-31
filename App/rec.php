<?PHP
header('Content-type: application/json; charset=utf-8');

$data = file_get_contents("nai.txt");
$param = $data;	//　やりたい処理

echo json_encode( $param ); //　JSON形式に変換してから返す