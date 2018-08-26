<!DOCTYPE html>
<html>
<head>
	<title> Login Successful </title>
	<link rel="stylesheet" type="text/css" href="login_success.css">
</head>
<body>
	<?php
		$conn = mysql_connect("localhost","root","daraoloye99") or die(mysql_error());
		mysql_select_db("project");
		
		if (isset($_REQUEST["submit"])) {
			# code...
		
		$username=$_REQUEST["username"];
		$pwd=$_REQUEST["pwd"];
		print <<<HERE
		<p>
			Username is $username
		</p>
		<p>
			Password is $pwd
		</p>	
HERE;
		}
		else{
			print("<h1>Ko le werk!</h1>");
			die();
		}
	?>
</body>
</html>
