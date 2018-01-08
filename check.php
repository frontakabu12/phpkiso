<!DOCTYPE html>
<html lang="ja">




<head>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootsnipp.css">




	<title>Confirm</title>
	<meta charset="utf-8">
</head>
<body>
	<section id="contact" class="content-section text-center">

	<!-- <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

<form method="POST" action="thanks.php">
<div class="contact-section">
            <div class="container">
            	<br>
	<div id="contact"><h2>Confirm</h2></div>

	<div class="row">
    <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name : <?php echo $_POST["exampleInputName2"]; ?></label>
            </div>
    <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">E-mail : <?php echo $_POST["exampleInputEmail2"]; ?></label>
	
	    </div>
	<div class="form-group ">
                      <label for="exampleInputText">Message : <?php echo $_POST["exampleInputText"]; ?></label>
	


	

	<input type="hidden" name="exampleInputName2" value="<?php echo $_POST["exampleInputName2"]; ?>">
	<input type="hidden" name="exampleInputEmail2" value="<?php echo $_POST["exampleInputEmail2"]; ?>">
	<input type="hidden" name="exampleInputText" value="<?php echo $_POST["exampleInputText"]; ?>">
	<br>
	<br>
	<div class="col-md-8 col-md-offset-2">
	<input type="button" value="Back" onclick="history.back();" class="btn btn-default">
	
	<input type="submit" value="OK" class="btn btn-default">
	</div>
</form>

</body>
</html>　　　　