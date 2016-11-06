<?php
session_start();
$username="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	$username = $_POST['u'];	
}
if($username=="") echo "Enter a username";
$conn = mysqli_connect("localhost","root","","test1");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users where username='"  . $username ."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username already exists";
} else {
	if($username!="") echo "Username available";
}

mysqli_close($conn);
?>