<?php 
	include 'conn.php'; 
	switch ($_SESSION['user_role']) {
	case 'admin_sport':
		//do notthing
		break;

	default:
		header("Location: logout.php");
		break;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin dashboard</title>
</head>
<body>
	<ul>
	  <li><a href="?page=main_page">หน้าหลัก</a></li>
	  <li>จัดการบัญชี</li>
	  	<ul>
	  		<li><a href="?page=profile">จัดการคณะสี</a></li>
	  	</ul>
	  <li>ระบบนักกีฬา</li>
	    <ul>
	      <li><a href="?page=add_sport">เพิ่มการเข่งขัน</a></li>
	      <li><a href="?page=add_player">เพิ่มนักกีฬา</a></li>
	    </ul>
	  <li><a href="?page=log_out">ออกจากระบบ</a></li>
	</ul>

<?php 
switch ($_GET['page']) {
	case 'main_page':
		echo "202 page found.";
		break;

	case 'profile':
		include 'admin_sport/admin_sport.php';
		break;

	case 'add_player':
		echo "202 page found.";
		break;

	case 'add_sport':
		echo "202 page found.";
		break;

	case 'log_out':
		header("Location: logout.php");
		echo "202 page found.";
		break;
	
	default:
		if (empty($_GET['page'])) {
			header("Location: ?page=main_page");
		}else{
			echo "404 page not found.";
		}
		break;
}
?>
</body>
</html>