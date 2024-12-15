<?php
require 'db.php';
if(isset($_POST['email'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=md5($_POST['passwd']);
	
	
	$sql = "INSERT INTO users (fname,lname,email,password)
	VALUES ('".$fname."', '".$lname."','".$email."','".$password."')";

	if (mysqli_query($conn, $sql)) {
	  echo "New user created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

<html>
<head> <title> Register </title> </head>
<body>
<h2> User Register </h2>
<form action="" method="POST">
<table>
	<tr>
		<td>First Name</td>
		<td><input type="text" name="fname" ></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lname" ></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email" ></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="passwd" ></td>
	</tr>
	
	<tr>
		<td><input type="reset" value="Reset" ></td>
		<td><input type="submit" value="Send" ></td>
	</tr>
</table>
</form>
</body>
</html>
