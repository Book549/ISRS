<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ผลการแข่งขันกีฬา</title>
    <style>
        body{
            font-family: "Mitr", sans-serif;
        }
        /* General styling */
        .menu-container {
            width: 80%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
           
        }

        .menu-title {
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;

        }

        /* Dropdown menu style */
        .table-menu {
            list-style: none;
            padding: 0;
            margin: 0;

        }

        .table-menu > li {
            background-color: darkblue;
            font-size: 20px;
            color: white;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            margin-bottom: 5px;
            border-radius: 5px;

        }

        /* Table submenu hidden initially */
        .table-content {
            display: none;
            margin: 0;
            padding: 0;
           
        }
        .table-content.open{
            transition: max-height 0.4s ease;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            transition: 0.5s ease;
        }

        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(25, 61, 107);
            font-weight: 500;
            color: white;
            cursor: pointer;
            
        }
        td{
            transition: 0.5s ease;
            cursor: pointer;
        }
        td:hover{
            background-color: #e1e1e1;
        }

       
    </style>
</head>
<body>

<div class="menu-container">
    <div class="menu-title" style="font-weight: 650;">ผลการแข่งขันกีฬา</div>
    <ul class="table-menu">
        <li onclick="toggleMenu('football')">ฟุตบอล</li>
        <ul id="football" class="table-content">
            <table >
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('futsal')">ฟุตซอล</li>
        <ul id="futsal" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

       <li onclick="toggleMenu('handball')">แฮนด์บอล</li>
        <ul id="handball" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('volleyball')">วอลเลย์บอล</li>
        <ul id="volleyball" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('petong')">เปตอง</li>
        <ul id="petong" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('basketball')">บาสเก็ตบอล</li>
        <ul id="basketball" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('badminton')">แบดมินตัน</li>
        <ul id="badminton" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('table_tennis')">เทเบิลเทนนิส</li>
        <ul id="table_tennis" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

        <li ><a href="report_combine.php" style="color: white;">กีฬาแต่ละระดับชั้น</a></li>


        <li onclick="toggleMenu('running')">กรีฑา</li>
        <ul id="running" class="table-content">
            <table>
                <tr>
                    <th>รายการ</th>
                    <th>ประเภท</th>
                    <th>🥇1</th>
                    <th>🥈2</th>
                    <th>🥉3</th>
                </tr>
                <tr>
                    <td>ไก่</td>
                    <td>นามเงิน</td>
                    <td>6</td>
                    <td>11</td>
                    <td>ชาย</td>
                </tr>
            </table>
        </ul>

    
    </ul>
</div>

<script>
   function toggleMenu(id) {
    // Get all submenu elements
    const allMenus = document.querySelectorAll('.table-content');
    
    // Close all menus before opening the clicked one
    allMenus.forEach(menu => {
        if (menu.id !== id) {
            menu.style.display = 'none';
        }
    });
    
    // Toggle the clicked menu
    const tableContent = document.getElementById(id);
    if (tableContent.style.display === 'block') {
        tableContent.style.display = 'none';
    } else {
        tableContent.style.display = 'block';
    }
}

    
</script>

</body>
</html>
