<!DOCTYPE html>
<html lang="en">
<title>Hiii...</title>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="viewport" content="width=device-width, initial scale=1">
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="foundation.css">
<link rel="stylesheet" href="foundation.min.css">
<link rel="stylesheet" href="css/style.css">

</head>
<body bgcolor="yellow" oncontextmenu="return false">

		<h1>Hiii...</h1>
	</div>
</div>

<form action="validate.php" method="POST">
<div class="row">
	<div class="small-4 medium-4 large-4 columns">
		<img src="images/images.jpg" id="image"></div>
	<div class="small-8 medium-8 large-8 columns">
<div class="row">
	<div class="large-12 medium-12 small-12 columns">
		<b><u>SIGN UP</u></b><br>
		<p><i>It's free so enjoy ...</i></p>
	</div>
</div>
<div class="row">
	<div class="small-12 large-6 medium-4 columns">
		<input type="text" placeholder="Firstname"  name="firstname"size="15" maxlength="20"  autofocus/ required>
	</div>
	<div class="small-12 large-6 medium-4 columns">
		<input type="text" placeholder="Last name"  size="15" name="lastname"maxlength="40" >
	</div>
</div>
<div class="row">
	<div class="small-12 large-12 columns">
		<input type="email" placeholder="xyz@xmail.com"  size="36" name="email" maxlength="40"  required>
	</div>
</div>
<div class="row">
	<div class="small-12 large-12 columns">
		<input type="email" placeholder="xyz@xmail.com"  size="36" name="email1"maxlength="40" required >
	</div>
</div>
<div class="row">
	<div class="small-12 large-12 columns">
		<input type="password" placeholder="Enter your Password"  size="36" name="password" maxlength="40" required>
	</div>
</div>

		
		<?php
session_start();
$_SESSION['rock']=rand(1000,9999);


?>
<img src='captcha.php'><br>
<div class="row">
	<div class="small-12 large-12 columns">
<input type="text" placeholder="enter the number you see" name="rock" ><br>
		
		<input type="submit" value="sign up" >
	</div>
</div>
</div>
</form>

</body>
</html>
