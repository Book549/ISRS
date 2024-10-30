<body>
<ul>
	<li><a href="?page=add_player&sub_page=view">view</a></li>
	<li><a href="?page=add_player&sub_page=add">add</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin_sport/view/view_add_player.php';
		break;

	case 'add':
		include 'admin_sport/add/add_add_player.php';
		break;

	case 'edit':
		include 'admin_sport/edit/edit_add_player.php';
		break;

	case 'del':
		include 'admin_sport/del/del_add_player.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			header("Location: ?page=add_player&sub_page=view");
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
