<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

    $email = $_POST["email"];
    $password = $_POST["password"];
    $gcm_regid = $_POST["regId"]; 	
	
$sql="select * from registration where email= '$email' and password='$password'";
$records=mysql_query($sql);

if(mysql_num_rows($records)>0)  //if there is a record, with given email and password pair
{
	$sqlquery="update registration set gcm='$gcm_regid',enabled=1 where email='$email' and password='$password'"; //Update GCM ID to that record
	$record=mysql_query($sqlquery);
	echo "inserted";
}
else
{
	echo "Authentication Failure !! <html><br></html>";
	header('http/1.0 404 not found');
	var_dump(http_response_code());
}
?>