<body>
    <?php
        // Sanitize input to prevent directory traversal or malicious inclusion
        $sub_page = isset($_GET['sub_page']) ? htmlspecialchars($_GET['sub_page']) : '';
        $switch = isset($_GET['switch']) ? htmlspecialchars($_GET['switch']) : '';
        
        switch ($sub_page) {
            case 'view':
                switch ($switch) {
                    case 'main':
                        include 'admin/add/add_report_sport.php';
                        break;
        
                    case 'third_place':
                        include 'admin/add/add_report_sport_triple.php';
                        break;
        
                    default:
                        echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=view&switch=main' />";
                        break;
                }
                include 'admin/view/view_report_sport.php';
                break;
        
            case 'edit':
                switch ($switch) {
                    case 'main':
                        include 'admin/edit/edit_report_sport.php';
                        break;
        
                    case 'third_place':
                        include 'admin/edit/edit_report_sport _triple.php';
                        break;
        
                    default:
                        echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=edit&switch=main' />";
                        break;
                }
                break;
        
            case 'del':
                include 'admin/delete/del_report_sport.php';
                break;
        
            default:
                if (empty($sub_page)) {
                    echo "<meta http-equiv='refresh' content='0;url=?page=results&sub_page=view&switch=main' />";
                    exit();
                } else {
                    echo "404 page not found.";
                }
                break;
        }
        ?>
</body>