<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reusable Sortable Tables</title>
    <style>
        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            cursor: pointer;
        }
        th {
            background-color: #f4f4f4;
        }
        h3 {
            text-align: center;
        }
        .custom-table {
            width: 80%;
            border: 2px solid #333;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #f9f9f9;
        }

        .custom-header {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .custom-cell {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div id="table-1-container"></div>
    <div id="table-2-container"></div>

    <script src="element/script_player.js"></script>
    <script>

        const customClasses = {
            table: "custom-table",
            headerCell: "custom-header",
            dataCell: "custom-cell"
        };
        // Data for Table 1
        const table1Data = {
            title: "ตารางที่ 1: สินค้า",
            headers: ["รายการ", "ประเภท", "สี", "ชื่อ", "สกุล", "ชั้น", "ห้อง"],
            rows: [
                ["001", "เครื่องเขียน", "แดง", "สมชาย", "ใจดี", "ม.3", "101"],
                ["002", "เสื้อผ้า", "น้ำเงิน", "สมหญิง", "น้อยใจ", "ม.5", "102"],
                ["003", "อุปกรณ์กีฬา", "เขียว", "ประยุทธ์", "สุวรรณ", "ม.6", "103"]
            ]
        };

        // Data for Table 2
        const table2Data = {
            title: "ตารางที่ 2: บุคคล",
            headers: ["รายการ", "ประเภท", "สี", "ชื่อ", "สกุล", "ชั้น", "ห้อง"],
            rows: [
                ["101", "นักเรียน", "ขาว", "สมหวัง", "มีสุข", "ป.1", "201"],
                ["102", "ครู", "ดำ", "สายรุ้ง", "พรรณราย", "ป.6", "202"],
                ["103", "พนักงาน", "ฟ้า", "วิชัย", "ยอดเยี่ยม", "ม.3", "203"]
            ]
        };

        // Render the tables
        createSortableTable("table-1-container", table1Data, customClasses);
        createSortableTable("table-2-container", table2Data, customClasses);
</script>

    
</body>
</html>
