<body>
<ul>
	<li><a href="?page=admin_system&sub_page=edit">แก้ไข/ลบ</a></li>
	<li><a href="?page=admin_system&sub_page=add">เพิ่ม</a></li>
</ul>
<?php 
switch ($_GET['sub_page']) {
	case 'edit':
		echo "202 page found.";
		break;

	case 'add':
		echo "202 page found.";

		include 'admin\admin_system.php';
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
