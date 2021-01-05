
<html>
<head>
	<title> LOGIN</title>
</head>
<body>
	<div id="main">
	<h1>Simple login</h1>
		<form method="POST" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
			Username <input type="text" name="username">
			Password <input type="password" name="password">
			<input type='submit'>
		</form>
	</div>
	
</body>
</html>

<?php

	if(isset($_POST['username'])){
		$user = 'root';
		$pass = '';
		$db = 'simplelogin';
		$db = new mysqli('localhost', $user, $pass, $db, "3307") or die("unable to connect");
	
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$sql = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
		$result = mysqli_query($db, $sql) or die("Bad sql: $sql");
	
		if(mysqli_num_rows($result) > 0){
			header("location:home.php");
		}else{
			echo" ";
		}
			
	}
	
?>