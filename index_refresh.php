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

$sql1 = "UPDATE user_details SET status='Online' WHERE user_name='$user'";
$conn->query($sql1) ;
?>


<?php
$user = $_SESSION["user"];
class member{
	
	function __construct(){
		
	}
	function get_member(){
		date_default_timezone_set("Asia/Dhaka");
		$date2=date_create(date('Y-m-d g:i:s a'));
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
            $date1=date_create($row['logout_time']);
            
			
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
$member -> get_member();

?>
