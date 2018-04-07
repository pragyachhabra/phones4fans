<?php
	if(isset($_POST['first_name']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$first_name = $_POST['first_name'];

		$query = " INSERT INTO languagevariables(Name) VALUES('$first_name')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}



		
?>