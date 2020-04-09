<?php
session_start();

//when no user session
// when message.php in one tab, and in another tab the user has done logout, then this will output "expired" which in result make message.php file to login page without refreshing
if(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') {
	echo "expired";
	die();
}

// if user has session then.
else {
date_default_timezone_set("Asia/Dhaka");

$user = $_SESSION["user"];
$target=$_POST['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple chat";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT msg_from,to_msg,messages, msg_date FROM messages where msg_from ='$user' AND to_msg ='$target' or msg_from='$target' and to_msg='$user'   ";
$result = $conn->query($sql);

// preparing messages with time in secs, mins etc
 if ($result->num_rows > 0) {
	        $date2=date_create(date('Y-m-d g:i:s a')); // present time
    while($row = $result->fetch_assoc()) {
		    $date1=date_create($row['msg_date']);    // msg_date time
			$date=date_diff($date1,$date2);

            $year=$date-> format("%y");
            $month=$date-> format("%m");
            $days=$date-> format("%a");

            $day=$days-365*$year -30*$month ;

            $hour=$date->format("%h");
            $mins=$date->format("%i");
            $seconds=$date->format("%s");
			$Times=array($year,$month,$day,$hour,$mins,$seconds);
			$effect1=array(" year ago"," months ago"," days ago"," hours ago"," mins ago"," secs ago");
			$effect2=array(" year ago"," month ago"," day ago"," hour ago"," min ago"," sec ago");
			
			for ($i=0;$i<5;$i++){
               if($Times[$i]!= 0){
				   break;
			   }
			}
       
         if  ($row["msg_from"]==$user){ 
		
		 echo "<div class='msg' style=\"box-shadow:1px 1px 2px 0px rgb(0,0,0,.3); max-width:70%;font-size:14px;border-radius:3px;color:black;margin-bottom:4px;padding:6px 6px 6px 6px ;float:right;clear:both;background-color:#DAF5C1\">".$row["messages"];
		if ($Times[$i]==1 || $Times[$i]==0){
			echo "<br><span style='font-size:10px;float:right;rgb(0,0,0,.4);'><i>".$Times[$i].$effect2[$i]."</i></span></div>";
		}
		else {
			echo "<br><span style='font-size:10px;float:right;rgb(0,0,0,.4);'><i>".$Times[$i].$effect1[$i]."</i></span></div>";
		}
		}
		
		if ($row["msg_from"]==$target){
		 echo "<div class='msg' style=\"box-shadow:1px 1px 2px 0px rgb(0,0,0,.3);max-width:70%;font-size:14px;border-radius:3px;color:black;margin-bottom:4px;padding:6px 6px 6px 6px ;float:left;clear:both;background-color:white\">".$row["messages"];
		if ($Times[$i]==1 || $Times[$i]==0){
			echo "<br><span style='font-size:10px;float:right;rgb(0,0,0,.4);'><i>".$Times[$i].$effect2[$i]."</i></span></div>";
		}
		else {
			echo "<br><span style='font-size:10px;float:right;rgb(0,0,0,.4);'><i>".$Times[$i].$effect1[$i]."</i></span></div>";
		}
		} 
      
    }
}
}

$conn->close();

?>
