<?php
//  扱いやすいように変数を代入
	$nickname = htmlspecialchars($_POST["nickname"]);
	$email = htmlspecialchars($_POST["email"]);
	$content = htmlspecialchars($_POST["content"]);


// データベースとのやりとりの処理を記述

// ステップ1 データベースに接続する
	// データベース接続文字列
	// mysql: 接続するデータベースの種類
	// dbname データベース名
	// host パソコンのアドレス　localhost このプログラムが存在している場所と同じサーバー
	// 空欄を入れないように記述するルール（＝の前後など）

	
	// //  データベース接続オブジェクト
	// $dbh = new PDO($dsn, $user, $password);
	// // 　今から実行するSQL文を文字コードutf8で送るという設定（文字化け防止）
	// $dbh->query('SET NAMES utf8');

	require('dbconnect.php');

// ステップ2　SQL文実行
	$sql = 'INSERT INTO `survey` (`nickname`,`email`,`content`) VALUES ("'.$nickname.'","'.$email.'","'.$content.'");';

	// SQL文を実行する準備
	$stmt = $dbh->prepare($sql);
	
	// SQL文を実行
	// -> アロー演算子
	$stmt->execute();

// ステップ3　データベースの切断（オブジェクトを空っぽにしている）
	$dbh = null;



?>



<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">



	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp3.css">


	<title>Completion</title>
</head>
<body>
	
	<div id="form-main">
  <div id="form-div">
    

	<br>

	<h1>Thank you for your Message.</h1>
	<br>

	<p class="name">
	Name <input  value= "<?php echo htmlspecialchars($_POST["nickname"]); ?>" class="validate[required,custom[onlyLetter],length[0,100]] flame" id="name" />
	</p>
	<p class="email">
	E-mail <input value="<?php echo htmlspecialchars($_POST["email"]); ?>" class="validate[required,custom[email]] flame" id="email" />
	</p>
	<p class="text">
	Message <input value="<?php echo htmlspecialchars($_POST["content"]); ?>" class="validate[required,length[6,300]] flame" id="comment" />
	</p>

	<br>
	<br>

	<!-- <?php echo htmlspecialchars($_POST["nickname"]); ?><br> -->
	<!-- <?php echo htmlspecialchars($_POST["email"]); ?><br> -->
	<!-- <?php echo htmlspecialchars($_POST["content"]); ?><br>
 -->
 <?php include('copyright.php'); ?>
</div>
</div>


</body>

</html>