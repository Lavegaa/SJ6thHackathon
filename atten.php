<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_passwd = "0000";
    $db_name = "hack";

    $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

    $ID = $_POST['ID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/atten.css"></head>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
           
            <div class="attendance">
                <p>출석 체크</p>
            </div>
            <div id="counter">0/0</div>
            <div id="id_box">
                <?
                    $sql = "create view tv
                            as select * from reservation_search where id = $ID";
                    $result = mysqli_query($conn, $sql);

                    $sqll = "select * from tv";
                    $resultl = mysqli_query($conn, $sqll);

                    $row = mysqli_fetch_array($resultl);
                    $resNum = $row['res'];
                    $sql2 ="select a.id from reservation_search a
                            inner join tv b
                            inner join reservation c
                            on b.res = c.res
                            where
                            year(now()) = year(c.starttime) and
                            month(now()) = month(c.starttime) and
                            day(now()) = day(c.starttime) and
                            a.res = b.res";
                    $result2 = mysqli_query($conn, $sql2);

                    $index = 0;

                    while($row = mysqli_fetch_array($result2)){
                        $id = $row['id'];
                        echo "<div class='box-items'>$id</div>";
                        $index++;
                    }

                    echo "<script>$('#counter').text('0 /'+$index);</script>";

                    $sql3 = "drop view if exists tv";

                    $result3 = mysqli_query($conn, $sql3);

                ?>
            </div>


            <form method="post" action="eval.php">
                <input type="hidden" value='<?=$ID?>' name="ID">
                <input type="hidden" value='<?=$resNum?>' name="resNum">
                <input type="submit" value="다음" id="submitform">
            </form>

            

    </div>

    <script>
    var counter = 0;
    $("#submitform").attr('disabled',true);
    $(function () {
        $(".box-items").click(function () {
                if ($(this).hasClass("itemSelected")) {
                    $(this).removeClass("itemSelected");
                    counter--;
                    $("#counter").text(counter+"/"+<?=$index?>);
                    if(counter == <?=$index?>-1){
                        $("#submitform").attr('disabled',true);
                    }
                }else{
                    $(this).toggleClass("itemSelected");
                    counter++;
                    $("#counter").text(counter+"/"+<?=$index?>);
                    if(counter == <?=$index?>){
                        $("#submitform").attr('disabled',false);
                    }
                }
            
            //i use slice to remove last comma
        });
    });

    
    </script>
</body>
</html>