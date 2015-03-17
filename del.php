<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

$email=$_POST['email'];
$password = $_POST['password'];
$gcm = $_POST['gcm'];

$sql="insert into registration(email,password,gcm,mpns,enabled) values ('$email','$password','$gcm','','1')";

$records=mysql_query($sql);

echo "User has been registered successfully !!";

?>



