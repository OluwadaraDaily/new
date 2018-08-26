<?php
	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$email = $_REQUEST['email'];
	$phoneNumber = $_REQUEST['phoneNumber'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$cpassword = $_REQUEST['cpassword'];

	if (!empty($firstName) || !empty($lastName) || !empty($email) || !empty($phoneNumber) || !empty($username) || !empty($password) || !empty($cpassword) ){
		$host= "localhost";
		$dbUsername= 'root';
		$dbPassword='daraoloye99';
		$dbname='project';
		$conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
		}
		else{
			$SELECT= "SELECT email FROM users WHERE email=? LIMIT 1";
			$INSERT= "INSERT INTO users (firstName, lastName, email, phoneNumber, username, password, cpassword)" values(?, ?, ?, ?, ?, ?, ?);
			
			//Prepare statement
			$stmt= $conn->prepare($SELECT);
			$stmt-> $bind_param('s',$email);
			$stmt->execute(); 
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum= $stmt->num_rows;

			if ($rnum==0) {
				# code...
				$stmt->close();

				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("sssisss", $firstName, $lastName, $email, $phoneNumber, $username, $password, $cpassword);
				$stmt-> execute();
				print "Login Successful"
			}
			else{
				print "Someone already registered using this email";
				die();
			}
			$stmt-> close();
			$conn-> close();
		}
	}

	else{
		print "All fields are required";
		die();
	}

	/*$conn = mysql_connect("localhost","root","daraoloye99") or die(mysql_error());
	mysql_select_db("project");
	$sql = "SELECT * FROM contact";
	$result = mysql_query($sql, $conn) or die(mysql_error());
	while($row = mysql_fetch_assoc($result)){
		foreach ($row as $name => $value){
			print "$name: $value <br>";
		} // end foreach
		print "<br>";
	} // end while
?>