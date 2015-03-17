<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $gcm_regid = $_POST["regId"]; 

	
	
$sql="select * from test where name= '$name' and email='$email'";
$records=mysql_query($sql);
echo $sql;
echo mysql_num_rows($records);
if(mysql_num_rows($records)>0)
{
	$sqlquery="update test set regid='$gcm_regid' where name='$name' and email='$email'";
	$record=mysql_query($sqlquery);
	echo "inserted";
}
else
{
	echo "\n";
	header('http/1.0 404 not found');
	var_dump(http_response_code());

}
/*
$sql="insert into test(name,email,regid) values ('$name','$email','$gcm_regid')";
echo "User has been registered successfully !!";
*/
?>



