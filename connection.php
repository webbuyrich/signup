<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysql_connect("db564106911.db.1and1.com", "dbo564106911", "signupdatabase1");
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db("db564106911", $conn);
?>