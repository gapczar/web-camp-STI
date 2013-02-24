<?php
include "connection.php";
echo "<h1>Thanks for voting!!!</h1>";

	$getallappstxt= "select * from mobile_app_img";
	$getallappsqry= mysql_query($getallappstxt) or die(mysql_error());
	if($getallappsqry)
	{
		$allapps = mysql_fetch_assoc($getallappsqry);
		foreach($allapps as $alla)
		{
			$getvotestxt = "select all from votes where ma_id = ". $alla['mai_id']. "";
			$getvotesqry = mysql_query($getvotestxt);
			$votes = mysql_fetch_assoc($getvotesqry);
			echo $alla["mai_filename"] . " = " . count($votes);
		}
	}