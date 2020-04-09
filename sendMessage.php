<?php
session_start();
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
	echo "expired";
	die();
}
?>
<?php

$user = $_SESSION["user"];
$status=$_SESSION["status"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple chat";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set("Asia/Dhaka");
$date=date('Y-m-d g:i:s a');

$target=$_POST['id'];
$M=$_POST['msg'];
$Mal=htmlspecialchars($M);
if ($Mal ==null){
}
else {

$sql = "INSERT INTO messages(msg_from, to_msg,messages,msg_date)
VALUES ('$user', '$target','$Mal','$date' )";

$conn->query($sql);
}

$sql3 = "SELECT msg_from,to_msg,messages, msg_date FROM messages where msg_from ='$user' AND to_msg ='$target' or msg_from='$target' and to_msg='$user'   ";
$result2 = $conn->query($sql3);

$conn->close();
?>
