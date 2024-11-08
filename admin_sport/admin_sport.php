<body>
<ul>
	<li><a href="?page=profile&sub_page=view" class="btn_viewadd">view</a></li>
	<li><a href="?page=profile&sub_page=edit" class="btn_viewadd">edit</a></li>
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
			echo "<meta http-equiv='refresh' content='0;url=?page=profile&sub_page=view' />";
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
</html>
