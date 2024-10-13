<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>admin dashboard</title>
	</head>
	<body>
	<a href="admin_system.php">admin dashbord</a><br>
	<a href="login.php">login</a><br>
	<?php 
foreach ($_SESSION as $key => $value) {
	echo "$key -- $value<br>";
}
	 ?>



	</body>
</html>