<?php
	if(isset($_POST['first_name']) && isset($_POST['last_name']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		$query = "UPDATE Language SET LastUsed = NOW() WHERE LastUsed IS NULL;";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
		$query = " INSERT INTO Language(Name, Code) VALUES('$first_name', '$last_name')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}



		
?>