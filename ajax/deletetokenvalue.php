<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");

    // get user id
    $value_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM Language WHERE ID = '$value_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>