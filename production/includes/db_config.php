<?php
	class db_config
	{
		function dbCon()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db="car_mangt_sys_db";	// database name
						
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $db);

			// Check connection
			if (!$conn) 
			{
				die("Connection failed: " . mysqli_connect_error());
			}
			//echo "Connected successfully";
			
			return $conn;	// return true of false
		}
	}	
?>