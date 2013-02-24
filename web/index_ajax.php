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
	echo $_POST['reg_username'];
}
?>