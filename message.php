<?php
require_once('authenticate.php');
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
  ::placeholder{
      position:relative;
      color:grey;
      opacity:.6;
      left:7px;
  }
  input[name=msg]:focus{
      outline:none;
  }
  .msg-container{
	  position:relative;
	  margin-left:30%;
	  margin-right:30%;
	  width:40%;
	  height:350px;
	  overflow:auto;
	  border-radius:3px;
	  scroll-behavior: smooth;
	  background-color:#f3ebe469;
	  box-shadow:0px 0px 2px 0px rgb(0,0,0,1)
  }
  .user{
	  text-align:center;
	  margin-left:30%;
	  margin-right:30%;
	  width:40%;
  }
  .form{
	  
	  margin-left:30%;
	  margin-right:30%;
	  width:40%;
  }
  .logout{
	 
	  margin-left:30%;
	  margin-right:30%;	 
	  
  }
   @media only screen and (max-width:600px) {
  /* For mobile phones: */
  .msg-container{
	  margin-left:0%;
	  margin-right:0%;
	  width:100%;
	  max-height:350px;
	  overflow:auto;
	  
  }
  .form{
	  
	  margin-left:0%;
	  margin-right:0%;
	  width:100%;
  }
  .logout{
	 
	  margin-left:0%;
	  margin-right:0%;	 
	  
  }
}
input[type='submit']:active{
	opacity:.5;
}


</style>
<body>
<?php

date_default_timezone_set("Asia/Dhaka"); // set of your own;

//finding target message
$target=$_GET["id"];


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

//making user online
$sql1 = "UPDATE user_details SET status='Online' WHERE user_name='$user'";
$conn->query($sql1) ;

//finding target online status
$sql2 = "SELECT user_name,status,logout_time FROM user_details where user_name ='$target'";

// finding time dution of last logout , $date2 as present time, and $date1 as last logout time in 117 line
$date2=date_create(date('Y-m-d g:i:s a'));
$result1 = $conn->query($sql2);
 if ($result1->num_rows > 0) {
	echo "<div class=\"user\">";
    while($row = $result1->fetch_assoc()) {
		if ($row["status"]=="Online"){
    echo "<p style=\"border-radius:2px;padding:2px;background-color:#0080008a;display:inline-block;color:white\">".$row["user_name"]." - Active now"."</p>";
		}
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
			$effect1=array(" year ago"," months ago"," days ago"," hours ago"," mins ago"," seconds ago");
			$effect2=array(" year ago"," month ago"," day ago"," hour ago"," min ago"," second ago");
			
			for ($i=0;$i<6;$i++)
               if($Times[$i]!= 0){
				   break;
			   }
              if ($Times[$i]==1){
		echo "<p style=\"border-radius:2px;padding:2px;color:white;background-color:#27030399;\">"."<span style=\"font-size:12px\">".$row["user_name"]." - <i>Active ".$Times[$i].$effect2[$i]."</i>"."</span>"."</p>";
			}
          else 		{	
         echo "<p style=\"border-radius:2px;padding:2px;color:white;background-color:#27030399;\">"."<span style=\"font-size:12px\">".$row["user_name"]." - <i>Active ".$Times[$i].$effect1[$i]."</i>"."</span>"."</p>";
    }
	}
}
    echo "</div>";
} 
$conn->close();


?>
<div class="container">
<div class='msg-container'>

</div>
</div>

<div class="form">

  <input autocomplete="off" style="margin-bottom:3px;width:80%;height:40px;border:none;border-bottom:1px solid black"type="text"  name="msg" placeholder="Send a message..." autofocus/>
  <input style="border-radius:20px;outline:none;padding:10px;color:white;width:80px;background-color:#4267B2;border:none;border:none;" type="button" class ="<?php echo $target; ?>" name="send" value="Send"/><br>

</div>
<div>
<div style="text-align:center;color:green">
<?php
 echo "Logged as <span style=\"color:red\">".$user."</span><br>";
 echo "<a href='index.php'>MessageList</a>"
?>
</div>
<form action="logout.php" method="post" class="logout">
<input style="border-radius:20px;outline:none;padding:5px;color:white;width:80px;background-color:#ef411e;border:none;border:1px solid red" type="submit" name="logout" value="Logout"/>
</form>
</div>
</div>
<div id="now">

</div>

</body>
 <script src="jquery.min.js" ></script>
<script>
	 $(document).ready(function(){
		 
		 var id=$("input[name='send']").attr("class");
		 
     // sending message
		 $('input[name="send"]').click(function(){
 			 var msg=$("input[name='msg']").val();
			 $.post("sendMessage.php",{msg:msg,id:id},function(data){
			 $("input[name='msg']").val("");
			 $("input[name='msg']").focus();
			 getContent();
		       });
	       }); 
		   
	function getContent(){
		 var oldscrollHeight = $(".msg-container").prop("scrollHeight");
         $.post("messages_refresh.php",{id:id},function(data){
			 if(data=="expired"){
				 window.location="index.php";
			 }
			 else{
         $(".msg-container").html(data);
 		 var newscrollHeight = $(".msg-container").prop("scrollHeight");
		             if(newscrollHeight > oldscrollHeight){
                $(".msg-container").delay(1000).scrollTop(newscrollHeight);
            }               
		 }
         });
      }
	  
	  //setting time interval for refreshing message
	  getContent();
	  setInterval(getContent,4000);

	 // setting enter key for send button for keyboard typing
       $("input[name='msg']").keypress(function (e) {
       var key = e.which;
       if(key == 13)  // the enter key code
          {
         $('input[name = "send"]').click();
          return false;  
         }
            }); 

});
    
</script>
</html>