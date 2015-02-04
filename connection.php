<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysql_connect("yourhost", "yourusername", "yourpassword");
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db("yourdatabase", $conn);
?>