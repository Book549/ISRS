<link rel="stylesheet"  href="element/styles_admin_sport.css">
<body>
    <ul>
        <li><a href="?page=player&sub_page=view" class="btn_viewadd">แก้ไข/ลบ</a></li>
        <li><a href="?page=player&sub_page=add" class="btn_viewadd">เพิ่ม</a></li>
    </ul>
    <?php 
        switch ($_GET['sub_page']) {
        	case 'view':
        		include 'admin/view/view_player.php';
        		break;
        
        	case 'edit':
        		include 'admin/edit/edit_player.php';
        		break;
        
        	case 'add':
        		include 'admin/add/add_player.php';
        		break;
        
        	case 'delete':
        		include 'admin/delete/del_player.php';
        		break;
        
        	default:
        		if (empty($_GET['sub_page'])) {
        			echo "<meta http-equiv='refresh' content='0;url=?page=player&sub_page=view' />";
        		}else{
        			echo "404 page not found.";
        		}
        		break;
        }
         ?>
</body>