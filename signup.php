<?php
//1- signup
session_start();
$conn = mysqli_connect("localhost", "root", "", "test1");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_REQUEST['u'];
    $password = $_REQUEST['p'];
    $type = $_REQUEST['t'];
    echo $type;
    $query="INSERT into users (username,password,id,type) values ('" . $username ."','" . $password . "',id=id+1,'" .$type.  "')";

    $result = mysqli_query($conn, $query);
    if(!$result) echo "There was some error signing up, contact the webmaster";
    $query="SELECT*FROM users WHERE username='".$username."'";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        $uid=$row['id'];
        $_SESSION['user']=$username;
        $_SESSION['uid']=$uid;
        $_SESSION['type']=$type;
        echo "Sign up successful! Redirecting to home page";
    }
   
}  else echo "Reload the page!";
	
?>