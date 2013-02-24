<?php
	class connection
	{
		public function dbconnect()
		{
			$server= 'localhost';
			$username = 'root';
			$password = 'root';
			$db = "hackathon-sti";

			$conn = mysql_connect($server, $username, $password);
			if($conn)
			{
				$selectdb = mysql_select_db($db, $conn);
			}
		}
	}

?>