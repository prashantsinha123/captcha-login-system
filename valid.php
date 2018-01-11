<?php
$conn_error='could not connect';
$mysql_host='localhost';
$username='root';
$password='';                              //we can put this all code of connection in another file and using require we can call it as we will use it alot.
$db='mysql';
@mysql_connect($mysql_host,$username,$password);
@mysql_select_db($db) or die($conn_error);

$mail=@$_POST['mail'];
$password=@$_POST['password'];
$pass_hash=md5($password);
if(isset($mail) && isset($password)){
	if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
		echo "invalid email id";
	}
	else{
		$query="SELECT `id` FROM `info` WHERE `email_id`='".mysql_real_escape_string($mail)."' AND `Password`='".mysql_real_escape_string($pass_hash)."'";
		$run=mysql_query($query);
		$row=mysql_num_rows($run);
		if($row==1){
			header('location:mainpage.html');
		}
		else{
			echo "invalid user input";
		}
		
	}
}
?>
