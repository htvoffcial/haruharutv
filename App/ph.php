
  <meta name="viewport" content="width=device-width,initial-scale=1">
<c>
<div class="b">
  <?php
$poi = $_COOKIE['point'];
  ?>
<h1 style="text-align:center;">ご利用可能か判定</h1>
  <script>
    var hoge = <?php echo json_encode($poi); ?>;
    var typ=location.search;
  const typ2 = typ.replace(/[^0-9]/g, '');
  var user = typ.substr( 1 );

document.title = user;
  
  
if(user<=hoge){

}else{
alert("貴方はポイントが足りないため使用出来ません \n これを実行するには"+user+"ポイント必要です\n体験版をご利用くださいポイントの詳細については\nhttps://smn.glitch.me/Appまで");
  location.href="https://haruharutv.sa-kon.net/test.html";
}
</script>
  <h1>
製品版をご利用いただけます
  </h1>
  <p>
    はるはるpoint(見てpoint)を使用します
  </p><small>5000pt以上で使用出来ます</small>
  <a href="https://haruharutv.sa-kon.net/seihin.html">製品版の利用を開始</a>
  </div>
  </c>

<style>
.b {
  width:100%;
  height:100%;
  font-size:12px;
  color:#000;
  text-align:center;
  display:block;
  padding:10px 0 10px;
  background:#f7f6f7;
  border-radius: 5px 5px 0px 0px;
}
  c {
    
  text-align:center;
  }
  
</style>

