<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];

    // Updaste User details
    $query = "UPDATE languagevariables SET Name = '$first_name' WHERE ID = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}