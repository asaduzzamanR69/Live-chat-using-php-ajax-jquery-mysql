<?php
session_start();

  date_default_timezone_set("Asia/Dhaka");
  
  $status=$_SESSION["status"];
  $user = $_SESSION["user"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple chat";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }

// making login status of this user offline

$date=date('Y-m-d g:i:s a');
 $sql1 = "UPDATE user_details SET status='Offline' WHERE user_name='$user'";
 $sql2 = "UPDATE user_details SET logout_time='$date' WHERE user_name='$user'";
 $conn->query($sql1) ;
 $conn->query($sql2) ;
 $conn->close();
 
 //then destroy the session for this user
  session_destroy();
  header("location:index.php");
?>