<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

    $gcm_regid = $_POST["regId"]; 	
	
$sql="select * from registration where gcm= '$gcm_regid'";
$records=mysql_query($sql);

if(mysql_num_rows($records)>0)  //if there is a record, with given GCM ID, set enabled=0
{
	$sqlquery="update registration set enabled=0 where gcm='$gcm_regid'"; //Update GCM ID to that record
	$record=mysql_query($sqlquery);
	echo "inserted";
}
else
{
	echo "Could not log out !! <html><br></html>";
	header('http/1.0 404 not found');
	var_dump(http_response_code());
}
?>