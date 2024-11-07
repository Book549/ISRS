<?php 
  include 'conn.php'; 
  if ($_SESSION['user_role'] !== 'admin_system') {
      echo "<meta http-equiv='refresh' content='0;url=logout.php'/>";
      exit();
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
	      <li><a href="?page=add_player">จัดการนักกีฬา</a></li>
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
		include 'admin_sport/add_player.php';
		break;

	case 'add_sport':
		include 'admin_sport/add_sport.php';
		break;

	case 'log_out':
		echo "<meta http-equiv='refresh' content='0;url=logout.php' />";
		echo "202 page found.";
		break;
	
	default:
		if (empty($_GET['page'])) {
			echo "<meta http-equiv='refresh' content='0;url=?page=main_page' />";
		}else{
			echo "404 page not found.";
		}
		break;
}
?>
</body>
</html>