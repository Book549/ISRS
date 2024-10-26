<body>
<ul>
	<li><a href="?page=profile&sub_page=view">view</a></li>
	<li><a href="?page=profile&sub_page=edit">edit</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin_sport/view/view_admin_sport.php';
		break;

	case 'edit':
		include 'admin_sport/edit/edit_admin_sport.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			header("Location: ?page=profile&sub_page=view");
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
