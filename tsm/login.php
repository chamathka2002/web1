<?php
require 'db.php';
if(isset($_POST['email'])){
	
	$email=$_POST['email'];
	$md5password=md5($_POST['passwd']);
	
	$sql="SELECT * FROM users WHERE email='".$email."' and password='".$md5password."'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		
		echo "Valid";
		
	}else{
		
		echo "Invalid username or password";
	}
	
}

?>

<html>
<head> <title> TMS -Login </title> </head>
<body>
<h2> TMS -Login Area</h2>
<form action="" method="POST">
<table>
	
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
		<td><input type="submit" value="Login" ></td>
	</tr>
</table>
</form>
</body>
</html>
