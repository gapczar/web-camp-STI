<!DOCTYPE html>
<?php
include ("connection.php");
if($handle = opendir("../apps-list/images"))
{
	while(false !== ($entry = readdir($handle)))
	{
		$filedata = explode(".", $entry);
		$filename = $filedata[0];
		$filetype = $filedata[1];
		$saveimgqry = "insert into mobile_app_img (mai_filename, mai_filetype) values ('" . $filename . "', '" . $filetype . "')";
		$saveimg = mysql_query($saveimgqry) or die(mysql_error());
	}
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