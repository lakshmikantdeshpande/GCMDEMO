<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

$email=$_POST['email'];

$sql="select * from registration where email='$email'";

$records=mysql_query($sql);
  
$record=mysql_fetch_assoc($records);

if(!empty($record['gcm']))
{	
	echo $record['gcm'];
	$sendmail="http://127.0.0.1/gcmdemo/sendmail.php?id=" . $record['gcm'];
	header('Location: ' . $sendmail);
}
else if (!empty($record['mpns']))
	echo $record['mpns'];
else
{
	//echo "This user is not registered !!"
	http_response_code(404);
}
?>