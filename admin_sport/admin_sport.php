<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="element/styles_admin_sport.css">
</head>
<body>
    <ul>
        <li><a href="?page=profile&sub_page=view" class="btn_viewadd">หน้าหลัก</a></li>
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