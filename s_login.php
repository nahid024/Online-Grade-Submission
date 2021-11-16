<html>
<head>
<meta charset="utf-8">
<title>Student Login Form</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div class="login-box">
	<h1>Login</h1>
		<form method="POST">
		<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="USER ID" name="user" value="" required>
		</div>
		<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="Password" placeholder="Password" name="pass" value="" required>
		</div>
		<input class="btn" type="submit" name="submit_1" value="Sign In">
		<a href="home.php">Home Page</a><a href="s_registration.php">Registration</a><br><br><a href="s_forgate.php" title="Forgot Password">Forgot Password</a>
		
		
		</form>
</body>

</html>

<?php
require 'connection.php';
if(isset($_POST["submit_1"]))
{
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$sql = "SELECT * FROM student where s_id='$user' and s_pass='$pass'";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
	if($resultCheck==true)
	{
		session_start();
		$_SESSION["user"]=$user;
		header('location:s_panel.php');
	}
	
	else
		
		{
			//header('location:s_login.php');
			echo "incorrect id or password!" 
             ; 

		}
}

 

?>