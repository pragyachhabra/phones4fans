<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Updaste User details
    $query = "UPDATE Language SET Name = '$first_name', Code = '$last_name' WHERE ID = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}