<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
	
<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<style> 
		h1{
			color:white;
			text-align: center;
			text-shadow: black;
		}

		body{
			background-color: grey;
		}

		a{
			color: white;
		}

		p{
			color: white;
			text-align: center;
		}

	</style>

	<a href="logout.php">Logout</a>
	
	<br> <br>
	<p> Hello, <?php echo $user_data['user_name']; ?><h1>WELCOME TO YOUR PROFILE</h1></p>

</body>
</html>
