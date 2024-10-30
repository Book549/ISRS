<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>รายการแข่งขัน</title>
</head>
<body>

<div class="medal-table-container">
    <h2>Medal Table</h2>
    <table class="medal-table" id="medalTable">
        <thead>
            <tr>
                <th onclick="sortTable(0)">#</th>
                <th>Country</th>
                <th onclick="sortTable(2)">Gold</th>
                <th onclick="sortTable(3)">Silver</th>
                <th onclick="sortTable(4)">Bronze</th>
                <th onclick="sortTable(5)">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img src="pic/flags/us.png" alt="USA flag" class="flag-icon"> USA</td>
                <td>39</td>
                <td>41</td>
                <td>33</td>
                <td>113</td>
            </tr>
            <tr>
                <td>2</td>
                <td><img src="pic/flags/china.png" alt="China flag" class="flag-icon"> China</td>
                <td>38</td>
                <td>32</td>
                <td>18</td>
                <td>88</td>
            </tr>
            <tr>
                <td>3</td>
                <td><img src="pic/flags/japan.png" alt="Japan flag" class="flag-icon"> Japan</td>
                <td>27</td>
                <td>14</td>
                <td>17</td>
                <td>58</td>
            </tr>
            <!-- Add more countries here -->
        </tbody>
    </table>
</div>

    <script src="script.js"></script>
</body>
</html>