<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto Complete Input box</title>
<link rel="stylesheet" type="text/css" href="jquery.autocomplete.css" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.autocomplete.js"></script>
<script>
$(document).ready(function(){
 $("#email").autocomplete("autocomplete.php", {
		selectFirst: true
	});
});
</script>
</head>

<body>
	logout
	<br>
	<br>
    <label>Email:</label>
	<form action="send.php" method="post">
    <input name="email" type="text" id="email" size="20"/>
	<br><br>
	<textarea name="message" cols=25 rows=5></textarea>
	<input type="submit" value="Send"></input>
	</form>
</body>
</html>