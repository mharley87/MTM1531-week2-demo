<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Query Strings</title>
</head>

<body>
<?php
	echo $_GET['name'];
	echo '  ';
	echo $_GET['lastname'];
?>

<a href="name.php?name=mike">Mike</a>
<a href="name.php?name=dude">dude</a>
<a href="name.php?name=guy">guy</a>
<a href="name.php?name=bud">bud</a>


</body>
</html>