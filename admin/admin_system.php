<body>
<ul>
	<li><a href="?page=admin_system&sub_page=view">แก้ไข/ลบ</a></li>
	<li><a href="?page=admin_system&sub_page=add">เพิ่ม</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'view':
		include 'admin\view_admin_sys.php';
		break;

	case 'edit':
		include 'admin\edit\edit_admin_sys.php';
		break;

	case 'add':
		include 'admin\add\add_admin_system.php';
		break;

	default:
		if (empty($_GET['sub_page'])) {
			header("Location: ?page=admin_system&sub_page=edit");
		}else{
			echo "404 page not found.";
		}
		break;
}
 ?>
</body>
