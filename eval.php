<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_passwd = "0000";
    $db_name = "hack";

    $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

    $ID = $_POST['ID'];
    $resNum = $_POST['resNum'];
    $room = substr($resNum,13,2);

    $sql = "select a.res from reservation a
            where
            a.starttime <
            (select b.starttime from reservation b where b.res = '$resNum')
            and
            room = '$room'
            order by
            a.starttime
            limit 1";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($resultl);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" href="./css/eval.css"></head>
    <title>Document</title>
</head>
<body>
    <nav class="bar">
        <div class="bar_contents">  
            <div class="insta_logo">
            <a href="">
                <div id="insta_logo_png"> </div>
            </a>
            <div id="insta_logo_hrizon"> </div>
            <a href="">
                <div id="insta_logo"> </div>
            </a>
            </div>
            <div class="find_text">
            <input id="TextFind" tpye="text" placeholder="검색" onclick="changeTextFind()" onblur="changeTextFind()" />
            </div>
            <div class="bar_logoes">
    
            </div>
        </div>
    </nav>
    <div class="main_container">
            
            <div class="content">
                <div id="txt_room">
                    <p>스터디룸 1</p>
                </div>
                <div id="txt_res_day">
                    <p>앞 사용자를 평가해 주세요.</p>
                </div>
                
                
                <form method="post" action="" name="checkboxs">
                    <div id="check">
                        <input type="checkbox" name="cc" value="CT"> <span>정확한 퇴실시간을 지키지 않았다.</span><br>
                        <input type="checkbox" name="cc" value="CR"> <span>방의 상태가 더럽다(ex 쓰레기, 정리정돈 등).</span><br>
                        <input type="checkbox" name="cc" value="NS"> <span>기자재가 고장났다.</span><br>
                        <input type="button" value="제출" onClick="selectChkBox(this.form)"style="float:right; width:70px; height:50px;">   
                    </div>
                </form>

                <form action="index.php" method='post' name="gogo">
                    <input type="hidden" value='<?=$ID?>' name ='ID'>
                </form>

                <?
                    $sql2 = "update student set wan = 1 where
                    id in
                    (select id from reservation_search
                    where res = '$resNum');";

                    echo "<script>";
                    echo "function selectChkBox(frm) {";
                    echo "if($('input:checkbox[name=cc]:checked').length>0){";
                        $result2 = mysqli_query($conn, $sql2);
                    echo "alert('제출됐습니다.');";
                    echo "document.gogo.submit();";
                    echo "}else{";
                    echo "document.gogo.submit();}}";
                    echo "</script>";
                ?>
                

            </div>
            

    </div>

    
</body>
</html>