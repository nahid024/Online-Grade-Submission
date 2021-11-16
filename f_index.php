<!DOCTYPE html>
<html>
<head>
 <title>EWU</title>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="styleweb.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
    <section>
        <div class="container">
            <div class="login-form">
                <h1>Feculty login  </h1>
                <form action="" method="POST">
							  <div class="row">
								<div class="col">
									<br>
									<input type="text" placeholder="USER ID" name="user" value="">
									<br>
								</div>
							</div>
							<br>
							  <div class="row">
								<div class="col">
								<input type="text" placeholder="Password" name="pass" value="">
								<br>
								</div>
							</div>

							<input class="btn" type="submit" name="submit_1" value="Sign Up">
							<br>
							<input class="btn" type="submit" name="submit_2" value="Registration">
							<br>
				</form>
						
				</div>
				<div>
				<a href="f_forgate.php" title="Forgot Password">Forgot Password</a>
			</div>
			</div>
		</section>
</body>
</html>

<?php
require 'connection.php';
if(isset($_REQUEST["submit_1"]))
{
	$user=$_REQUEST["user"];
	$pass=$_REQUEST["pass"];
	$sql = "SELECT * FROM faculty where f_initial='$user' and f_pass='$pass'";
    $result = mysqli_query($connection, $sql);
    $resultCheck = mysqli_num_rows($result);
	if($resultCheck==true)
	{
		session_start();
		$_SESSION["user"]=$user;
		header('location:f_panel.php');
	}
	
	else
		
		{
			echo "Your ID or Password Must be wrong.Try again with correct ID Password!";
		}
}

if(isset($_REQUEST["submit_2"]))
{
	header('location:f_registration.php');
}


?>