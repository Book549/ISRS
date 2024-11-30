<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <ul>
        <li><a href="?page=sport&sub_page=view" class="btn_viewadd">แก้ไข/ลบ</a></li>
        <li><a href="?page=sport&sub_page=add" class="btn_viewadd">เพิ่ม</a></li>
        <li><a href="?page=sport&sub_page=add_set" class="btn_viewadd">เพิ่มแบบเซ็ต</a></li>
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
        
        	case 'add_set':
        		include 'admin/add/add_set_sport.php';
        		break;
        
        	case 'delete':
        		include 'admin/delete/del_sport.php';
        		break;
        
        	default:
        		if (empty($_GET['sub_page'])) {
        			echo "<meta http-equiv='refresh' content='0;url=?page=sport&sub_page=view' />";
        		}else{
        			echo "404 page not found.";
        		}
        		break;
        }
        ?>
</body>
</html>