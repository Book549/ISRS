<?php 
	include 'conn.php'; 
	switch ($_SESSION['user_role']) {
	case 'admin_system':
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
	  		<li><a href="?page=admin_system">Admin ระบบ</a></li>
	  		<li><a href="?page=admin_sport">Admin สี</a></li>
	  		<li><a href="?page=admin_report">Admin รายงานผล</a></li>
	  	</ul>
	  <li>ระบบนักกีฬา</li>
	    <ul>
	      <li><a href="?page=type_sport">ประเภทกีฬา</a></li>
	      <li><a href="?page=player">นักกีฬา</a></li>
	    </ul>
	  <li><a href="?page=schedule">ตารางการแข่งขัน</a></li>
	  <li><a href="?page=results">ผลการแข่งขัน</a></li>
	  <li><a href="?page=certificate">เกียรติบัตร</a></li>
	  <li><a href="?page=log_out">ออกจากระบบ</a></li>
	</ul>

<?php 
switch ($_GET['page']) {
	case 'main_page':
		echo "202 page found.";
		break;

	case 'admin_system':
		echo "202 page found.";
		include 'admin\admin_system.php';
		break;

	case 'admin_sport':
		echo "202 page found.";
		break;

	case 'admin_report':
		echo "202 page found.";
		break;

	case 'type_sport':
		echo "202 page found.";
		break;
		
	case 'player':
		echo "202 page found.";
		break;

	case 'schedule':
		echo "202 page found.";
		break;

	case 'results':
		echo "202 page found.";
		break;
		
	case 'certificate':
		echo "202 page found.";
		break;

	case 'log_out':
		header("Location: logout.php");
		echo "202 page found.";
		break;
	
	default:
		if (empty($_GET['page'])) {
			#header("Location: ?page=main_page");
		}else{
			echo "404 page not found.";
		}
		break;
}
?>
</body>
</html>