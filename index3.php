<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp3.css">
	<title>Contact Us</title>
</head>
<body>
	


<div id="form-main">
  <div id="form-div">
    <form method="POST" action="check3.php">	
	<h1>Contact Us</h1>
	<br>
      
      <p class="name">
        <input name="nickname" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" required="" />
      </p>
      
      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="E-mail" required=""/>
      </p>
      
      <p class="text">
        <textarea name="content" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message" required="" ></textarea>
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