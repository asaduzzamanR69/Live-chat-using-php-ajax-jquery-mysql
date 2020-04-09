<?php

require_once('authenticate.php');
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

$sql1 = "UPDATE user_details SET status='Online' WHERE user_name='$user'";
$conn->query($sql1) ;
?>


<?php
date_default_timezone_set("Asia/Dhaka"); //make of your own city
$user = $_SESSION["user"];


// geting users details in mins ,days etc
class member{
	
	function __construct(){
		
	}
	function get_member(){
		
		$date2=date_create(date('Y-m-d g:i:s a')); //present time;
		$user = $_SESSION["user"];
		
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "simple chat";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } 

		$sql = "select user_name,logout_time,status from user_details where user_name != '$user'";
        $result = $conn->query($sql);
		echo "<table>";
        if ($result->num_rows > 0) {
			
        while($row = $result->fetch_assoc()) {
			$id=$row["user_name"];
			echo "<tr>";
            echo "<td><a href='message.php?id=$id'>".$row["user_name"]."</a></td>";
        if ($row["status"]=="Offline"){
            $date1=date_create($row['logout_time']); // login status
            
			
			$date=date_diff($date1,$date2);

            $year=$date-> format("%y");
            $month=$date-> format("%m");
            $days=$date-> format("%a");

            $day=$days-365*$year -30*$month ;

            $hour=$date->format("%h");
            $mins=$date->format("%i");
            $seconds=$date->format("%s");
			$Times=array($year,$month,$day,$hour,$mins,$seconds);
			$effect1=array(" years ago"," months ago"," days ago"," hours ago"," mins ago"," seconds ago");
			$effect2=array(" year ago"," month ago"," day ago"," hour ago"," min ago"," second ago");
			
			for ($i=1;$i<=6;$i++)
               if($Times[$i]!= 0){
				   break;
			   }
        	if ($Times[$i]==1){
		echo "<td>"."<i><span class='time'>".$Times[$i].$effect2[$i]."</span></i>"."</td>";
			}	
             else{			
        echo "<td>"."<i><span class='time'>".$Times[$i].$effect1[$i]."</span></i>"."</td>";
			 }
		}
		if ($row["status"]=="Online"){
        echo "<td style=\"color:green\">Active now</td>";
         }
		   echo "</tr>";
		
         }
		 
         }
      echo "</table>";

	}
}

$member=new member();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
body{
	font-family:arial;
}
 #msglist{
margin-left:30%;
margin-right:30%;
width:40%;
height:auto;
}
table{
	border-collapse:collapse;
	width:100%;
}
td{
    padding-top:14px;
	padding-left:14px;
	padding-bottom:14px;
	border-bottom:1px solid rgb(0,0,0,0.1);


}
tr:nth-child(even){
	background-color:rgb(0,0,0,.05);
	
}
tr:nth-child(odd){
	background-color:rgb(0,0,0,.03);
	
} 
tr:nth-child(even):hover{
	background-color:rgb(0,0,0,.06);
	
}
tr:nth-child(odd):hover{
	background-color:rgb(0,0,0,.06);
	
} 
 .logout{
	 
	  margin-left:30%;
	  margin-right:30%;	 
	  
  }
   @media only screen and (max-width:600px) {
  /* For mobile phones: */
  #msglist{
	  margin-left:0%;
	  margin-right:0%;
	  width:100%;  
  }
 td{

}
   }
   .time{
	   font-size:14px;
	   color:rgb(0,0,0,.6);
   }
</style>
<body>

<div id="msglist">
  <?php
  //finding users in this site
  $member -> get_member();
  ?>
</div>
<div style="text-align:center;color:green">
<?php
 echo "Logged as <span style=\"color:red\">".$user."</span>";
?>
</div>
<form action="logout.php" method="post" class="logout">
<input style="border-radius:20px;outline:none;padding:5px;color:white;width:80px;background-color:#ef411e;border:none;border:1px solid red" type="submit" name="logout" value="Logout"/>
</form>

</body>
 <script src="jquery.min.js" ></script>
<script>
    
     $(document).ready(function(){

      function getData(){
      $.post("index_refresh.php",{},function(data){
	  if (data=="expired"){
		  location.href=("http://localhost:8080/project/chat");
	  }
	   else {
	   $("#msglist").html(data);
	   }
	  });

        }
        getData();
        setInterval(function () {
        getData(); 
        },10000);  // it will refresh your data every 1 sec
    });
    
</script>
</html>