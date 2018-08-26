<!DOCTYPE html>
<html>
	<head>
		<title> Sign Up Form</title>
		<link rel="stylesheet" type="text/css" href="newform.css">
		<script type="text/javascript" src=""> </script>
	</head>
	<body>
		<div id="personalInfo">
			<h1> SIGN UP </h1>
			<form action="newform.php" method="post">
				<input type="text" name="txtFirstName" placeholder="First Name" id="left1"> 
				<input type="text" name="txtLastName" placeholder="Last Name" id="right1"> <br>	<br>
				<input type="text" name="txtEmail" placeholder="Email Address" id="left2" class="bottom"> 
				<input type="text" name="txtPhone" placeholder="Phone Number" id="right2" class="bottom"> <br> <br>
				<input type="submit" name="submit" id="button" value="SIGN UP">
			</form>
		</div>

	</body>
</html>