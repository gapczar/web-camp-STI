<!DOCTYPE html>
<?php
include ("connection.php");
if(isset($_SESSION['user_id'])){
	echo "set na";
	echo $_SESSION['user_id'];
	session_destroy();
}
?>
<html>
	<head>
		<script type='text/javascript' src='/functions/jquery.js'></script>
		<script type='text/javascript' src='/functions/index_func.js'></script>
	</head>
<body>
	
<?php

	include "registration_form.php";
	include "login_form.php";
?>


</body>
</html>