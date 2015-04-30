<?php
	session_start();
	if(!isset($_SESSION['name']))
	{
		header("location: index.php");
	}
	$name=$_SESSION['name'];

	echo "Hi " . $name;
?>

<html>
<head>
<title>Mithi Portal</title>
</head>
<body>
<a href="logout.php">Log out </a>
</body>
</html>