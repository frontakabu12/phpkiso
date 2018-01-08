<?php 
	// 開発環境用
	// ステップ1 データベースに接続する
	$dsn = 'mysql:dbname=phpkiso;host=localhost';

	// $user データベース接続用ユーザー名
	// $password データベース接続用ユーザーのパスワード

	$user = 'root'; //rootは権限が強いユーザー
	$password='';

	// データベース接続文字列
	// mysql: 接続するデータベースの種類
	// dbname データベース名
	// host パソコンのアドレス localhost このプログラムが存在している場所と同じサーバー
	// 空欄を入れないように記述するルール（＝の前後など）
	

	// 本番環境
	// $dsn = 'mysql:dbname=LAA0918713-phpkiso;host=mysql103.phy.lolipop.lan';

	// // $user データベース接続用ユーザー名
	// // $password データベース接続用ユーザーのパスワード

	// $user = 'LAA0918713'; //rootは権限が強いユーザー
	// $password='cebunexseed';

	//  データベース接続オブジェクト
	$dbh = new PDO($dsn, $user, $password);
	//  今から実行するSQL文を文字コードutf8で送るという設定（文字化け防止）
	$dbh->query('SET NAMES utf8');



	



?>
