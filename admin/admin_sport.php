<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
<ul>
	<li><a href="?page=admin_sport&sub_page=view" class="btn_viewadd">view</a></li>
	<li><a href="?page=admin_sport&sub_page=edit"  class="btn_viewadd">add</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin/view/view_admin_sport.php';
		break;

	case 'edit':
		include 'admin/edit/edit_admin_sport.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			echo "<meta http-equiv='refresh' content='0;url=?page=admin_sport&sub_page=view' />";
			exit();
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
</html>
