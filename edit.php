<?php
  // ステップ1
  // DBの接続
  require('dbconnect.php');
  // ステップ2
  // SQL文実行
  $sql = 'SELECT * FROM `survey` WHERE `code`='.$_GET['code'];    //情報を取得するときはGET送信
  // SQL文を実行する準備
  $stmt = $dbh->prepare($sql);
      
  // SQL文を実行
  // -> アロー演算子
  $stmt->execute();

  // ヒント：ここにフェッチしたデータを保存しておく代入文を記述！！
  $record = $stmt->fetch(PDO::FETCH_ASSOC);

  if (isset($_POST['code'])){
    // ボタンが押されたらUPDATE文を実行 (データを送るときはPOST送信)
    $sql = 'UPDATE `survey` SET `nickname`="'.$_POST["nickname"].'",`email`="'.$_POST["email"].'",`content`="'.$_POST['content'].'" WHERE `code` = '.$_POST['code'];
  
  // SQL文を実行する準備
  $stmt = $dbh->prepare($sql);
      
  // SQL文を実行
  // -> アロー演算子
  $stmt->execute();

  

  // view.phpに戻る  
  header('Location: view.php');
 
  }
    
  // ステップ3
  // 接続の解除
  $dbn = null;



?>





<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp3.css">
	<title>Contact Us Edit</title>
</head>
<body>
	


<div id="form-main">
  <div id="form-div">
    <form method="POST" action="">   <!-- actionは空、自分に飛ばす  -->	
	<h1>Contact Us Edit</h1>
	<br>
  <div>
    コード<br>
    <?php echo $_GET['code']; ?>
    <input type="hidden" name="code" value=" <?php echo $_GET['code']; ?>" />   <!-- 追加 -->
  </div>
      
      <p class="name">
        <input name="nickname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required="" value="<?php echo $record['nickname']; ?>" />
      </p>
      
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="E-mail" required="" value="<?php echo $record['email']; ?>"/>
      </p>
      
      <p class="text">
        <textarea name="content" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message" required="" ><?php echo $record['content']; ?></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  

<!-- <p>
copyright kanaando already reserved.
著作権はKanaAndoが持っています。©️
</p> -->
<br>

 <?php include('copyright.php');?>
</div>

</div>

</body> 
</html>