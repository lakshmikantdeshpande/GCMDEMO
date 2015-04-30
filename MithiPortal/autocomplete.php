<?php
	$q=$_GET['q'];
	$my_data=mysql_real_escape_string($q);
	$mysqli=mysqli_connect('localhost','root','','gcm') or die("Database Error");
	$sql="SELECT email FROM registration WHERE email LIKE '%$my_data%' and enabled='1' ORDER BY email";
	$result = mysqli_query($mysqli,$sql) or die(mysqli_error());
	
	if($result)
	{
		while($row=mysqli_fetch_array($result))
		{
			echo $row['email']."\n";
		}
	}
?>