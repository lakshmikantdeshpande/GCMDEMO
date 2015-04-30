<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from login where email='$email'";

$records=mysql_query($sql);
  
$record=mysql_fetch_assoc($records);

echo "<center><font face='verdana'><br><img src='css/25.GIF'></img><br><br><br>";

if(!empty($record['email']))
{		
	if(($record['password'])==$password)
	{
		session_start();
		$_SESSION['name']=$email;
		
		echo "Authenticated";
		echo "<h6>    Please wait....This page will redirect to the portal momentarily...<br>";
		echo "If it does not, <a href='message.php'>click here</a> to proceed...";
		header( "refresh:3;url=message.php" );
	}
	else
	{
		echo "Invalid Credentials";
		echo "<br>";
		echo "<h6>    This page will redirect to login page automatically...<br>";
		echo "If it does not, <a href='index.php'>click here</a> to proceed...";
		header( "refresh:3;url=index.php" );
	}
}
else
{
		echo "Invalid Credentials";
		echo "<br>";
		echo "<h6>    This page will redirect to login page automatically...<br>";
		echo "If it does not, <a href='index.php'>click here</a> to proceed...";
		header( "refresh:3;url=index.php" );
}
?>