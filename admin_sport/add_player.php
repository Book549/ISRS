<head>
    <link rel="stylesheet"  href="element/styles_admin_sport.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <ul>
        <li><a href="?page=add_player&sub_page=view" class="btn_viewadd2">ดูรายชื่อนักกีฬา</a></li>
        <li><a href="?page=add_player&sub_page=add" class="btn_viewadd2">เพิ่มนักกีฬา</a></li>
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
        			echo "<meta http-equiv='refresh' content='0;url=?page=add_player&sub_page=view' />";
        		}else{
        			echo "404 page not found.";
        		}
        		break;
        }
         ?>
</body>