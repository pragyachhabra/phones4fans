<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $token_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM languagevariables WHERE ID = '$token_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>