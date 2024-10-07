<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php echo "This is a test <br>"; 
	$sql = "SELECT * FROM `test`";
	$resuit = mysqli_query($conn, $sql);
	if (mysqli_num_rows($resuit) > 0 ) {
		while ($row = mysqli_fetch_assoc($resuit)) {
			foreach ($row as $key => $value) {
				echo "$key -- $value <br>";
				echo "--------------------<br>";
			}
		}
	}else{
		echo "look like it empty";
	}
?>
</body>
</html>