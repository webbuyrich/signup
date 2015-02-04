<?php
include ('error.php');
include ('connection.php');
global $conn;
$error='';
if (isset($_POST['signup'])) {
if (empty($_POST['signup_username']) || empty($_POST['signup_password']) || 
    empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['lastname'])) {
$error = "Error";
echo $error;
} else {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['signup_username'];
    $email = $_POST['email'];
    $password =  $_POST['signup_password'];
    $query = "INSERT INTO members (id, username, password, email, firstname, lastname) VALUES ('','$username','$password','$email',
        '$firstname','$lastname')";
       $data = mysql_query($query) or die(mysql_error());
       if($data){
       echo ('Success');
       } 
}




}

?>