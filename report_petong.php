<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>เปตอง</title>
    <style>
        body{
            font-family: "Mitr", sans-serif;
        }
        /* General styling */
        .report-container {
            width: 80%;
            max-width: 800px;
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

        td .another{
            background-color: lightcoral;
        }
    </style>
</head>
<body>

<div class="report-container">
    <div class="menu-title"><a href="index.php" style="text-decoration: none; color: black;" > เปตอง</a></div>
    <ul class="table-menu">
        
    <li onclick="toggleMenu('jumen')">ม.ต้น ชายเดี่ยว</li>
        <ul id="jumen" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('highmen')">ม.ปลาย ชายเดี่ยว</li>
        <ul id="highmen" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

       <li onclick="toggleMenu('womenall')">ม.ต้น หญิงเดี่ยว</li>
        <ul id="womenall" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('highmen')">ม.ปลาย หญิงเดี่ยว</li>
        <ul id="highmen" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('jumen2')">ม.ต้น ชายคู่</li>
        <ul id="jumen2" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('highmen2')">ม.ปลาย ชายคู่</li>
        <ul id="highmen2" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

       <li onclick="toggleMenu('womenall2')">ม.ต้น หญิงคู่</li>
        <ul id="womenall2" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
                </tr>
            </table>
        </ul>

        <li onclick="toggleMenu('highmen2')">ม.ปลาย หญิงคู่</li>
        <ul id="highmen2" class="table-content">
        <table>
                <tr>
                    <th style="width: 10%;">อันดับ</th>
                    <th style="width: 60%;">สี</th>
                    <th>คะแนนรวม</th>
                    
                </tr>
                <tr>
                    <td>🥇1</t
                    d><td>ม.ต้น ชาย</td>
                    <td>เหลือง</td>
                </tr>
                <tr>
                    <td>🥈2</td>
                    <td>แดง</td>
                    <td>60</td>
                </tr>
                <tr>
                    <td>🥉3</td>
                    <td>ฟ้า</td>
                    <td>58</td>
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
