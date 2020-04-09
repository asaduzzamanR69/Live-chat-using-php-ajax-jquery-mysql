
<?php
if (isset($_POST['registration'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple chat";
$conn = new mysqli($servername, $username, $password, $dbname);

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "insert into user_details(user_name,password) values('$username','$password')";
if($conn->query($sql)===true){
	header('location:index.php');

}

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .content{
    box-sizing: border-box;
    }
      input[name=username]{
          width:100%;
          height:30px;
          border:none;
          background:#E9EBEC;
          border-radius:3px;
          margin-bottom:15px;
          text-align:center ;

      }
      input[name=password]{
          width:100%;
          height:30px;
          border:none;
          background:#E9EBEC;
          border-radius:3px;
          margin-bottom:15px;
          text-align:center ;
          }
       input[name=registration]{
          width:100%;
          height:30px;
          border:none;
          background:#87C540;
          border-radius:3px;
          margin-bottom:15px;
          text-align:center ;
          color:white;
      
      }
      input[name=password]:focus{
        outline:none;
      }
      input[name=username]:focus{
        outline:none;
      }
      a{
          align:center;
          color:red;

      }

    </style>
</head>
<body>

<div id="page" style="margin-left:10%;margin-right:10%">
	
		<div style="width:100%;height:auto;background-color:#4561B4">
			<h2 style="text-align:center;color:white">Registration</h2>		
	    </div>
	<section id="content">
		<form id="login" method="post">
			<input id="username" name="username" type="text" required placeholder="username"></br>
			<input id="password" name="password" type="password" required placeholder="password">	<br/>			
			<input type="submit" value="Registration" name="registration">
		</form>
	</section>
	


</div>

</body>
</html>
