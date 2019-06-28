<?php

$db_host = "localhost";
$db_user = "root";
$db_passwd = "0000";
$db_name = "hack";

$conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

$rsv_roomno = $_GET['rsv_roomno'];
$rsv_time = $_GET['rsv_time'];
$rsv_date = $_GET['rsv_date'];
$rsv_id1 = $_GET['rsv_id1'];
$rsv_name1 = $_GET['rsv_name1'];
$rsv_id2 = $_GET['rsv_id2'];
$rsv_name2 = $_GET['rsv_name2'];
$rsv_id3 = $_GET['rsv_id3'];
$rsv_name3 = $_GET['rsv_name3'];
$rsv_id4 = $_GET['rsv_id4'];
$rsv_name4 = $_GET['rsv_name4'];
$rsv_id5 = $_GET['rsv_id5'];
$rsv_name5 = $_GET['rsv_name5'];
$rsv_id6 = $_GET['rsv_id6'];
$rsv_name6 = $_GET['rsv_name6'];

$rsv_no = substr($rsv_date,0,4).substr($rsv_date,5,2).substr($rsv_date,8,2).substr($rsv_time,0,2).substr($rsv_time,3,2).$rsv_roomno;

$qurry = "INSERT INTO reservation values ('$rsv_no', '$rsv_date.$rsv_time','$rsv_roomno')";
$result = mysqli_query($conn, $qurry);

if($rsv_id1 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id1')";
    mysqli_query($conn, $qurry);
}
if($rsv_id2 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id2')";
    mysqli_query($conn, $qurry);
}
if($rsv_id3 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id3')";
    mysqli_query($conn, $qurry);
}
if($rsv_id4 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id4')";
    mysqli_query($conn, $qurry);
}
if($rsv_id5 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id5')";
    mysqli_query($conn, $qurry);
}
if($rsv_id6 != ""){
    $qurry = "INSERT INTO reservation_search VALUES('$rsv_no', '$rsv_id6')";
    mysqli_query($conn, $qurry);
}


//echo("<script>location.href='reservation.php';</script>");

?>
