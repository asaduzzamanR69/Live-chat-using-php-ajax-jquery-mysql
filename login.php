<?php
session_start();
if(!(empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') ){
	header('Location:index.php');
}
?>
<?php
if (isset($_POST['login'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple chat";
$conn = new mysqli($servername, $username, $password, $dbname);

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "select *from user_details where user_name='$username' and password='$password'";
$result = $conn->query($sql);

//check if any in the database
   if($result->num_rows>0) {
	   // if any, then make a sesson for this user
			$_SESSION["authenticated"] ='true' ;
            $_SESSION["user"] =$username; 
            $_SESSION["status"]='Active';
			header('Location: index.php');
		}
		else {
			 echo "<div style=\"width:100%;height:20px;color:white;background-color:#4561B4\"><p style=\"text-align:center\">Username or password error!</p><div>";
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
	#page{
		width:50%;
		margin-left:25%;
		margin-right:25%
	}
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
       input[name=login]{
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
@media only screen and (max-width:600px){
		#page{
		width:80%;
		margin-left:10%;
		margin-right:10%
	}
}
    </style>
</head>
<body>
<div id="err_msg">
</div>
<div id="page"style="">
	
	
		<div style="width:100%;height:auto;background-color:#4561B4">
			<h2 style="text-align:center;color:white">Login</h1>
				
	    </div>
	<section id="content">
		<form id="login" method="post">
			
			<input id="username" name="username" type="text" required placeholder="username"></br>
			
			<input id="password" name="password" type="password" required placeholder="password">	<br/>			
			<input type="submit" value="Login" name="login">
		</form>
	</section>
</div>

</body>
</html>
<?php
			
			
		}
$conn->close();
	}
 else {
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
		#page{
		width:50%;
		margin-left:25%;
		margin-right:25%
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
       input[name=login]{
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
@media only screen and (max-width:600px){
		#page{
		width:80%;
		margin-left:10%;
		margin-right:10%
	}
}
    </style>
</head>
<body>

<div id="page" style="">
	
		<div style="width:100%;height:auto;background-color:#4561B4">
			<h2 style="text-align:center;color:white">Login</h1>	
	    </div>
	<section id="content">
		<form id="login" method="post">
			<input id="username" name="username" type="text" required placeholder="username"></br>
			<input id="password" name="password" type="password" required placeholder="password">	<br/>			
			<input type="submit" value="Login" name="login">
		</form>
	</section>
	
	<a href="registration.php">Not  a user? <strong>Registration</strong></a>

</div>

</body>

</html>
<?php } ?>
<script>	 

</script>
