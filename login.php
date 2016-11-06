<?php
//2-login
session_start();
$conn = mysqli_connect("localhost", "root", "", "test1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_REQUEST['u'];
    $password = $_REQUEST['p'];
    $query="SELECT *FROM users where username= '" . $username ."' and password='" . $password . "'";
    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result) >0 ) {
    	echo "Logged in! Redirecting....";
    	$_SESSION['user']=$username;
    	$_SESSION['uid']=$row['id'];
    	$_SESSION['type']=$row['type'];
    }else echo "Invalid username/password";
}else echo "Error connecting.";
?>