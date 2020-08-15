<?php session_start()?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
<?php
	session_destroy();
	header('location:login.php')
?>
</body>
</html>