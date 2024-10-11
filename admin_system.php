<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin dashboard</title>
</head>
<body>
<?php 
include 'element\side_bar.html';
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