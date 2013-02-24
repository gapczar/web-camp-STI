<?php
	include ("connection.php");
if(isset($_POST['login_username'])){
	$username = $_POST["login_username"];
	$password = $_POST["login_password"];

	$username = htmlspecialchars(mysql_real_escape_string($username));
	$password = htmlspecialchars(mysql_real_escape_string($password));

	$getuserqry = "select * from users where username = '" .$username . "' and password = '" . $password . "'";
	$getuser = mysql_query($getuserqry) or die(mysql_error());
	$count=mysql_num_rows($getuser);
	if( $count!= 0){
		$row=mysql_fetch_assoc($getuser);
		$_SESSION['user_id']=$row['userid'];
		header("Location:index.php");
	}
	else
	{
		echo "error";
	}
	
}

if(isset($_POST['reg_username'])){
	$username = $_POST["reg_username"];
	$password = $_POST["reg_password"];
	$email=$_POST["reg_email"];
	$username = htmlspecialchars(mysql_real_escape_string($username));
	$password = htmlspecialchars(mysql_real_escape_string($password));
	$email = htmlspecialchars(mysql_real_escape_string($email));
	$q=mysql_query("select * from users where username='{$username}'; ");
	$num=mysql_num_rows($q);
	$qq=mysql_num_rows("select * from users where email='{$email}'");
	$num1=mysql_num_rows($q);

	if(($num!=0) || ($num!=0)){
		$appender="";
			if($num==0){

			}else{
				$appender=$appender."<script>alert('Username is already in user');</script>";
			}

			if($num1==0){


			}else{
				$appender=$appender."<script>alert('Email is already in user'); </script>";
			}
	}else{
		$q=mysql_query("insert into users values('','{$username}','{$password}','{$email}');");
		$id=mysql_insert_id();
		$q=mysql_query("select * from users where userid={$id};");
		$r=mysql_fetch_assoc($q);
		$_SESSION['user_id']=$r['userid'];
	}


	echo $appender;
}

?>