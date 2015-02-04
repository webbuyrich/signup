<?php
include ('error.php');
session_start(); // Starting Session
include ('connection.php');
//global $conn;
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
} else {
    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];

    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    // Selecting Database
    //$db = mysql_select_db("test", $conn);

    // SQL query to fetch information of registerd users and finds user match.
    //$stmt = $conn->query("select * from members where password='$password' and username='$username'");
    //$row_count = $stmt->rowCount();
    $query = mysql_query("select * from members where password='$password' and username='$username'", $conn);
    $rows = mysql_num_rows($query);
    //echo $row_count.' rows selected';
    if ($rows == 1) {
    $_SESSION['login_user']=$username; // Initializing Session
    echo('Success');
    //header("location: profile.php"); // Redirecting To Other Page
    } else {
        $error = "Username or Password is invalid";
        echo $error;
    }
    mysql_close($conn); // Closing Connection
    }
}
?>