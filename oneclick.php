<html>
<head>
<title>
OneClick testing portal
</title>
</head>
<body>
<?php
$con= mysql_connect('localhost','root','');
$db=mysql_select_db('gcm');

echo "Connected Successfully";
echo '<br>';

$sql = "select * from  registration";
$records = mysql_query($sql);

while($res = mysql_fetch_assoc($records))
{
	echo $res['email'];
	echo '<br>';
}
?>
</body>
</html>