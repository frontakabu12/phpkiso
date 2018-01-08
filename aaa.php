<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<h1>入力内容確認</h1>
ようこそ、<?php echo $_POST["nickname"]; ?>様 <br>
メールアドレス:<?php echo $_POST["email"]; ?> <br>
お問い合わせ内容:<?php echo $_POST["content"]; ?> <br>

<input type="button" value="戻る" onclick="history.back();">　

<form method="POST" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"]; ?>">
  <input type="submit" value="OK">
</form>


</body>
</html>