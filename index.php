<script>var url = location.href

if(url.indexOf('http:') >= 0) { // 判定方法の修正
  // url文字列の書き換え
  var newUrl = url.replace('http:', 'https:'); // 書き換え方法の修正

  // リダイレクト
  location.replace(newUrl);
}
location.href="App";
</script>
