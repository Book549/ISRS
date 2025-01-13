<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <title>การแข่งขันกีฬาภายใน สามัคคีเกมส์ ครั้งที่ ๕๐ “กีฬาสร้างสรรค์ รวมพลังสามัคคี” ประจำปี ๒๕๖๗</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="element/createcertificate_01.css" />
    <link rel="stylesheet" href="element/createcertificate_font.css" />
    <link href="https://fonts.googleapis.com/css?family=Kodchasan|Athiti|Charm|Charmonman|Chonburi|Fahkwang|Itim|K2D|Kanit|KoHo|Krub|Maitree|Mali|Mitr|Niramit|Pattaya|Pridi|Prompt|Sarabun|Sriracha|Srisakdi:700|Taviraj|Thasadith:700|Trirong" rel="stylesheet">
  </head>
  <body>
   
  <a class="icon-print" onclick="window.print()" title="พิมพ์หน้านี้"></a>
  <div id="cert_bg">
    <img src="pic/certificate.png">
      <div id="cert_name" style="position: absolute;margin-left: 392px;top: 46.7px;">
        <img src="pic/swk_logo.svg" style="height: 143px; width: auto;">
      </div>
        <span class="cert_number" style="background-color:#FFFFFF;border-radius:15px;"><font color="blue">&nbsp;&nbsp;เลขที่ ๐๐๑ ส.ว.ค. ๖๑/๒๕๖๗&nbsp;&nbsp;</font></span>
        <div id="cert_name" style="font-family:Sarabun;font-size:32.5px;color:#00176F;top:209px;">
            โรงเรียนสามัคคีวิทยาคม
        </div> 
        <div id="cert_name" style="font-family:Sarabun;font-size:27px;color:#00176F;top:253px;">
            สำนักงานเขตพื้นที่การศึกษามัธยมศึกษาเชียงราย
        </div>        
        <div id="cert_name" style="font-family:Sarabun;font-size:27.4px;color:#00176F;top:290px;">
            ขอมอบเกียรติบัตรฉบับนี้ไว้เพื่อแสดงว่า
        </div>
        <div id="cert_name" style="font-family:Sarabun;font-size:26px;color:#000000;top:340px;font-weight: bold;">
            เด็กชายชื่อ - สกุล
        </div>

        <div id="cert_name" style="padding-top: 15px;font-family:Sarabun;font-size:22px;color:#000000;top:340px;">
            <br />ได้รับรางวัล ชนะเลิศ การแข่งขันกีฬาวิ่ง ๑๐๐ เมตร ม.๑ ชาย
        </div>
        <div id="cert_name" style="padding-top: 15px;font-family:Sarabun;font-size:20.5px;color:#000000;top:380px;">
            <br />การแข่งขันกีฬาภายใน สามัคคีเกมส์ ครั้งที่ ๕๐ "กีฬาสร้างสรรค์ รวมพลังสามัคคี"
        </div>
        <div id="cert_name" style="padding-top: 15px;font-family:Sarabun;font-size:21.1px;color:#000000;top:415px;">
            <br />ระหว่างวันที่ ๒๗ - ๒๙ พฤจิกายน ๒๕๖๗
        </div>

        <div id="cert_name" style="padding-top: 20px;font-family:Sarabun;font-size:22.7px;color:#00176F;top:415px;">
            <br /><br />ขอให้รักษาเกรียติประวัติและคุณความดีนี้ไว้ตลอดไป
        </div>
        <div id="cert_name" style="padding-top: 20px;font-family:Sarabun;font-size:23.1px;color:#00176F;top:453px;">
            <br /><br />ให้ไว้ ณ วันที่ ๒๙ พฤศจิกายน พ.ศ. ๒๕๖๗
        </div>
        <div id="cert_name" style="padding-top: 20px;font-family:Sarabun;font-size:23.1px;color:#00176F;top:571px;">
            <br /><br />(ชื่อ - สกุล)
        </div>
        <div id="cert_name" style="padding-top: 20px;font-family:Sarabun;font-size:23.1px;color:#00176F;top:609px;">
            <br /><br />ผู้อำนวยการโรงเรียนสามัคคีวิทยาคม
        </div>

    </div>
  </body>
</html>
 <?php 
    include 'conn.php';
    if (isset($_GET['id_player'])) {
        $id_player = $_GET['id_player'];
        $find_player = "SELECT * FROM `players` WHERE `id_player` = ".$id_player;
        $resuit_find_player = mysqli_query($conn, $find_player);
        if (mysqli_num_rows($resuit_find_player) > 0) {
            while ($row_players = mysqli_fetch_assoc($resuit_find_player)) {//`id_player``player_id``player_title``player_name``player_sirname``player_class``player_room``player_color_id``player_color_id``player_sport_id`
                $got_reward = "SELECT * FROM `reward` WHERE `reward_sport_id` = ".$row_players['player_sport_id'];
                $resuit_got_reward = mysqli_query($conn, $got_reward);
                if (mysqli_num_rows($resuit_got_reward) > 0) {
                    $reward_got = mysqli_fetch_assoc($resuit_got_reward);
                    foreach ($reward_got as $key => $value) {
                        #echo "|$key => $value |<br>";

                        if ($row_players['player_color_id'] == $value) {
                            #echo $row_players['player_color_id']."|<br>";
                            switch ($key) {
                                case 'reward_first':
                                    #echo "reward_first";
                                    break;

                                case 'reward_second':
                                    #echo "reward_second";
                                    break;

                                case 'reward_third':
                                case 'reward_third_one':
                                case 'reward_third_two':
                                    #echo "reward_third";
                                    break;
                                
                                default:
                                    #echo "ไม่พบรางวัล";
                                    break;
                            }
                        }
                    }
                }else{
                    #echo "resuit_got_reward = 0 (no data in reward)";
                }
            }
        }
    }
?>