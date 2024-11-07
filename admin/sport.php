<body>
	<ul>
	<li><a href="?page=sport&sub_page=view">แก้ไข/ลบ</a></li>
	<li><a href="?page=sport&sub_page=add">เพิ่ม</a></li>
	</ul>

	<?php 
	switch ($_GET['sub_page']) {
		case 'view':
			include 'admin/view/view_sport.php';
			break;

		case 'edit':
			include 'admin/edit/edit_sport.php';
			break;

		case 'add':
			include 'admin/add/add_sport.php';
			break;

		case 'delete':
			include 'admin/delete/del_sport.php';
			break;

		default:
			if (empty($_GET['sub_page'])) {
				header("Location: ?page=sport&sub_page=view");
			}else{
				echo "404 page not found.";
			}
			break;
	}
 ?>
</body>
</html>




