<html>
<head>
<meta charset="utf-8">
<title>Admin Login Form</title>
<link rel="stylesheet" href="style1.css">
<body>
<div class="login-box">
<h1>Login</h1>
<form method="post">
<div class="textbox">
<i class="fa fa-user" aria-hidden="true"></i>
<input type="text" placeholder="USER ID" name="user" value="">
</div>
<div class="textbox">
<i class="fa fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Password" name="pass" value="">
</div>
<input class="btn" type="submit" name="submit_1" value="Sign In">
<input class="btn" type="submit" name="submit_3" value="Home Page">
</div>
</form>
</body>
</head>
</html>

<?php
require 'connection.php';
if(isset($_POST["submit_1"]))
{
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	$sql = "SELECT * FROM admin where id='$user' and pass='$pass'";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
	if($resultCheck==true)
	{
		header('location:admin_panel.php');
	}
	
	else
		
		{
			echo "Your ID or Password is wrong.Try again with correct ID Password!";
		}
}

if(isset($_POST["submit_3"]))
{
	header('location:home.php');
}


?>