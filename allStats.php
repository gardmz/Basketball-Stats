<!DOCTYPE html>
<html>
<style>
	
	table  { border: 1px solid black; border-collapse: collapse; 
		background-color: wheat; padding: 3px; }
	td, th { border: 1px solid gray; padding: 3px; }
	tbody > tr:nth-child(odd) { background-color: white; }
</style>
<head>
</head>
<body>
	<h1>All School Stats</h1>
	<a href="http://localhost:8012/Module_8/home.php">Back To Search</a>
	<img src="kobe.jpg" alt="Smiley face" align="right">
	<br>
</body>
</html>

<?php

	$user = 'root';
	$pass = '';
	$db = 'stats';
	$db = new mysqli('localhost', $user, $pass, $db, "3307") or die("unable to connect");
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($db, $sql) or die("Bad Query");
	
	echo"<table border='1'";
	echo"<tr><td>School</td><td>SRS</td><td>SOS</td><td>W1</td><td>L1</td><td>W2</td><td>L2</td><td>PACE</td><td>ORtg</td><td>FTR</td><td>EFG</td><td>TOV</td><td>ORB</td><td>FTFGA</td></tr>";
	while( $row = mysqli_fetch_assoc($result)){
		echo"<tr><td>{$row['School']}</td><td>{$row['SRS']}</td><td>{$row['SOS']}</td><td>{$row['W1']}</td><td>{$row['L1']}</td><td>{$row['W2']}</td><td>{$row['L2']}</td><td>{$row['Pace']}</td><td>{$row['ORtg']}</td><td>{$row['FTr']}</td><td>{$row['eFG']}</td><td>{$row['TOV']}</td><td>{$row['ORB']}</td><td>{$row['FTFGA']}</td></tr>";
	}
	echo"</table>";
	
?>