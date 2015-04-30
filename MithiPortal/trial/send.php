<?php
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['message'];
?>

<?php

mysql_connect('localhost', 'root', '');
mysql_select_db('gcm');

$email=$_POST['email'];
$message=$_POST['message'];

$sql="select * from registration where email='$email' and enabled=1";

$records=mysql_query($sql);
  
$record=mysql_fetch_assoc($records);

if(!empty($record['gcm']))
{	
	echo $record['gcm'];
	$sendnotification="http://127.0.0.1/gcmdemo/MithiPortal/trial/customnotification.php?id=" . $record['gcm'] . "&message=" . $message;
	header('Location: ' . $sendnotification);
}
else if (!empty($record['mpns']))
	echo $record['mpns']; 
else
{
	echo "This user is not registered !!";
	header('http/1.0 404 not found');
	echo "<html><br></html>";
	var_dump(http_response_code());
}
?>