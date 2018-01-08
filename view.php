<?php
//  扱いやすいように変数を代入
	

// データベースとのやりとりの処理を記述

// ステップ1 データベースに接続する
	// データベース接続文字列
	// mysql: 接続するデータベースの種類
	// dbname データベース名
	// host パソコンのアドレス localhost このプログラムが存在している場所と同じサーバー
	// 空欄を入れないように記述するルール（＝の前後など）

	// $dsn = 'mysql:dbname=phpkiso;host=localhost';

	// // $user データベース接続用ユーザー名
	// // $password データベース接続用ユーザーのパスワード

	// $user = 'root'; //rootは権限が強いユーザー
	// $password='';

	// //  データベース接続オブジェクト
	// $dbh = new PDO($dsn, $user, $password);
	// //  今から実行するSQL文を文字コードutf8で送るという設定（文字化け防止）
	// $dbh->query('SET NAMES utf8');

require('dbconnect.php');

// ステップ2 SQL文実行
	$sql = 'SELECT * FROM `survey`;';

// SQL文を実行する準備
	$stmt = $dbh->prepare($sql);
	
// SQL文を実行
// -> アロー演算子
	$stmt->execute();

// ステップ3 データベースの切断（オブジェクトを空っぽにしている）
	// $dbh = null;



?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp4.css">
	<title>お問い合わせ一覧</title>
</head>
<body>
	




<h1 style="text-align:center">【お問い合わせ一覧】</h1>


	
<?php 
	

	// while文 条件指定ができる繰り返し文
	// while (1) 無限ループ
	while (1) {
	// 一行取得
	$record = $stmt->fetch(PDO::FETCH_ASSOC);

	
	// $recordの値がない場合
	if ($record == false){
		// 処理を中断する
		break;
	}

	// 連想配列のキーがカラム名と同じものになっている！！！

?>

		
<div class="prices-box">
	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price-table aos-init aos-animate" data-aos="fade-right">
    		<div class="t-gyo">            
				<div class="top-content text-center">
    
                

					<div class="title">

				  	<h3>No: <?php echo $record["code"]; ?></h3>
					
					<div action="" method="post">  
					<a href="delete.php?code=<?php echo $record["code"]; ?>" onclick="return confirm('No. <?php echo $record["code"]; ?> を削除します、よろしいですか？');"><input type="button" value="削除" class="button-h" id="button-h"></a>
					<a href="edit.php?code=<?php echo $record["code"]; ?>"><input type="button" value="編集" class="button-h" id="button-h"></a>
					</div>
			        </div>

					<div class="bottom-content text-center">
					<p class="features-border list-unstyled">
		
					<p>Name :	 <?php echo $record["nickname"]; ?></p>
					<p>E-mail :	 <?php echo $record["email"]; ?></p>
					<p>Message : <?php echo $record["content"]; ?></p>
					</p>
					</div>
   				</div>
   			</div>
		</div>
	</div>
</div>


    <!-- <li class="grey">
    <li class="highlight">
 -->

<?php
}
	$dbh = null;


// 宿題
	// リストタグかtableタグを使って、画面を装飾してみよう

?>

 


</body>
</html>