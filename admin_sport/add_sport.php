<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet"  href="element/styles_admin_sport.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<ul>
	<li><a href="?page=add_sport&sub_page=view" class="btn_viewadd">view</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin_sport/view/view_add_sport.php';
		break;

	case 'add':
		include 'admin_sport/add/add_add_sport.php';
		break;

	case 'edit':
		include 'admin_sport/edit/edit_add_sport.php';
		break;

	case 'del':
		include 'admin_sport/del/del_add_sport.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			header("Location: ?page=add_sport&sub_page=view");
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
</html>
