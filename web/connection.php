<?php	 
			session_start();
			$server= 'localhost';
			$username = 'root';
			$password = 'root';
			$db = "hackathon-sti";

			$conn = mysql_connect($server, $username, $password) or die(mysql_error());
			if($conn)
			{
				$selectdb = mysql_select_db($db, $conn);
				if(!$selectdb)
				{
					echo "error2";
				}
			}
			else
			{
				echo "error1";
			}
			
?>