
<?php
session_start();
$_SESSION['username']=$_POST['firstname'];
$conn_error='could not connect';
$mysql_host='localhost';
$username='root';
$password='';                              //we can put this all code of connection in another file and using require we can call it as we will use it alot.
$db='mysql';
@mysql_connect($mysql_host,$username,$password);
@mysql_select_db($db) or die($conn_error);

$firstname=@$_POST['firstname'];
$lastname=@$_POST['lastname'];
$email=@$_POST['email'];
$reemail=@$_POST['email1'];
$password=@$_POST['password'];
$pass_hash=md5($password);
$captcha=@$_POST['rock'];
$session=@$_SESSION['rock'];
if(isset($firstname)&&isset($email)&&isset($reemail)&&isset($pass_hash)&& isset($captcha)){
	if(empty($firstname)){
		echo "enter firstname".'<br>';
	}else if(empty($email)){
		echo "enter the valid emailid".'<br>';
	}  else if(empty($reemail)){
		echo "enter the valid emailid".'<br>';
	}else if(empty($password)){
		echo "enter the password".'<br>';
	}
	if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
  $nameErr = "Only letters and white space allowed";
  echo  $nameErr.'<br>';
}
	if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
  $nameErr = "Only letters and white space allowed";
  echo  $nameErr.'<br>';
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo "invalid email format".'<br>';
}

if(!filter_var($reemail,FILTER_VALIDATE_EMAIL)){
	echo "invalid email format".'<br>';
}


	
		$query="INSERT INTO `info` (`id`,`firstname`,`lastname`,`email_id`,`Password`) VALUES (NULL,'".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($pass_hash)."')";
		$wild="SELECT `email_id`FROM `info` WHERE `email_id` LIKE '%".mysql_real_escape_string($email)."%'";
		$run=mysql_query($wild);
		
		if($_SESSION['rock']!=$_POST['rock']){
			echo "invalid captcha".'<br>';
		}
		else{
	
		if(($email!=$reemail)){
			echo "email id should be same";
		}
		
		else {
			if((mysql_num_rows($run)==0))
		{
		mysql_query($query);
		header('location:login.html');
		}
		else{
			echo"email id already exists";
		}
		}
	}
}else{
	$bday= "input all the necessary fields";
	}




?>

