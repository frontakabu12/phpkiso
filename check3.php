<!DOCTYPE html>
<html lang="ja">




<head>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp3.css">




	<title>Confirm</title>
	<meta charset="utf-8">
</head>
<body>
	


<div id="form-main">
  <div id="form-div">
    <form method="POST" action="thanks3.php">


            	<br>
	<div id="contact">
		<h1>Confirm</h1></div>

		<br>

		<p class="name">
			Name <input  name="nickname"  value= "<?php echo htmlspecialchars($_POST["nickname"]); ?>" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" id="name" />
			<?php if ($_POST["nickname"]=="") {
				echo 'Input your Name';
			} else { ?>

<!-- 		    <?php echo htmlspecialchars($_POST["nickname"]); ?> 
        <?php } ?> -->
        </p>

        <p class="email">
        	E-mail <input  name="email" value="<?php echo htmlspecialchars($_POST["email"]); ?>" class="validate[required,custom[email]] feedback-input" id="email" />
        	<?php if ($_POST["email"]==""){
        		echo 'Input your E-mail';
        	} else { ?>

                 <!--  E-mail : <?php echo htmlspecialchars($_POST["email"]); ?>
            <?php } ?>    -->   
	
	    </p>

	    <p class="text">
	    	Message <input name="content" value="<?php echo htmlspecialchars($_POST["content"]); ?>" class="validate[required,length[6,300]] feedback-input" id="comment" />
	    	<?php if ($_POST["email"]==""){
        		echo 'Input your Message';
        	} else { ?>
            <!--  Message : <?php echo htmlspecialchars($_POST["content"]); ?>
			<?php } ?> -->
        </p>

	

	
	
	
	<br>
	<br>
	<div class="submit">
	<input type="button" value="BACK" onclick="history.back();" id="button-blue"/>

	<?php if (($_POST['nickname'] !="") && ($_POST['email'] !="") && ($_POST['content'] !="")){ ?>

	
	
    <input type="submit" value="SEND" id="button-blue"/>

    <?php } ?>    
        <div class="ease"></div>
    </div>

	
	
	

</form>

<br>
<?php include('copyright.php'); ?>
</body>

</html>