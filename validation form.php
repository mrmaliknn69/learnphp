
<html>
<body>

	<?php
if(isset($_POST['submit'])){
	$username= $_POST['username'];
	$password= $_POST['pass'];
	$c_password= $_POST['cpass'];
	$phone= $_POST['phone'];
	if (is_numeric($username)) {
		echo "<span style ='color:red;'>**Username shouldn't be numeric**</span>";
	}
	
	elseif ($password!=$c_password) {
		echo"<span style ='color:red;'>**match your password please**</span>";
	}
	else{
		echo $username . "<br>";
		echo $password . "<br>";
		echo $c_password . "<br>";
		echo $phone ;

	}
	
}




?>

<form action="" method="post">
	<p>Username <br>
<input type="text" name="username"></p>
	<p>Password <br>
<input type="password" name="pass"></p>
<p>Confirm Password <br>
<input type="password" name="cpass"></p>
<p>Phone <br>
<input type="number" name="phone"></p>
<input type="submit" name="submit">
</form>

</body>
</html>
