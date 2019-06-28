
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reservation.css">
    <title>Document</title>
</head>
<body>
<div>
<table border="1">
  <form action="asdf.php" method="get">
    <tr>
      <th><input type="submit" name = "room" value ="01"></th>
      <th><input type="submit" name = "room" value ="02"></th>
      <th><input type="submit" name = "room" value ="03"></th>
      <th><input type="submit" name = "room" value ="04"></th>
      <th><input type="submit" name = "room" value ="05"></th>
      <th><input type="submit" name = "room" value ="06"></th>
      <th><input type="submit" name = "room" value ="07"></th>
    </tr>
  </form>
  <tr><th>시간</th><th>월</th><th>화</th><th>수</th><th>목</th><th>금</th></tr>
  <tr><td>0900</td><td id="21"></td><td id="31"></td><td id="41"></td><td id="51"></td><td id="61"></td></tr>
  <tr><td>1030</td><td id="22"></td><td id="32"></td><td id="42"></td><td id="52"></td><td id="62"></td></tr>
  <tr><td>1200</td><td id="23"></td><td id="33"></td><td id="43"></td><td id="53"></td><td id="63"></td></tr>
  <tr><td>1330</td><td id="24"></td><td id="34"></td><td id="44"></td><td id="54"></td><td id="64"></td></tr>
  <tr><td>1500</td><td id="25"></td><td id="35"></td><td id="45"></td><td id="55"></td><td id="65"></td></tr>
  <tr><td>1630</td><td id="26"></td><td id="36"></td><td id="46"></td><td id="56"></td><td id="66"></td></tr>
</table>
</div>
<br>

<div>
  <form action ="insert.php" method="get">
    <select name = "rsv_roomno"><option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option><option>07</option></select><br>
    <select name = "rsv_time"><option>09:00</option><option>10:30</option><option>12:00</option><option>13:30</option><option>15:00</option><option>16:30</option></select><br>
    <input name = "rsv_date" type ="text" placeholder='2019-06-25'><br>
    <input name ="rsv_id1" type="text" placeholder="학번1"><br>
    <input name ="rsv_name1" type="text" placeholder="이름1"><br>
    <input name ="rsv_id2" type="text" placeholder="학번2"><br>
    <input name ="rsv_name2" type="text" placeholder="이름2"><br>
    <input name ="rsv_id3" type="text" placeholder="학번3"><br>
    <input name ="rsv_name3" type="text" placeholder="이름3"><br>
    <input name ="rsv_id4" type="text" placeholder="학번4"><br>
    <input name ="rsv_name4" type="text" placeholder="이름4"><br>
    <input name ="rsv_id3" type="text" placeholder="학번3"><br>
    <input name ="rsv_name3" type="text" placeholder="이름3"><br>
    <input name ="rsv_id4" type="text" placeholder="학번4"><br>
    <input name ="rsv_name4" type="text" placeholder="이름4"><br>
    <input name ="rsv_id5" type="text" placeholder="학번5"><br>
    <input name ="rsv_name5" type="text" placeholder="이름5"><br>
    <input name ="rsv_id6" type="text" placeholder="학번6"><br>
    <input name ="rsv_name6" type="text" placeholder="이름6"><br>
    <input type="submit" value="예약">
  </form>
</div>
<script>
</script>
</body>


<?php

$db_host = "localhost";
$db_user = "root";
$db_passwd = "0000";
$db_name = "hack";

$conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

$rsv_roomno = $_GET['room'];


$qurry = "select room, date_format(starttime, '%H%i') as time, dayofweek(starttime) from reservation where room = $rsv_roomno";
$result = mysqli_query($conn, $qurry);

echo "<script>";
while ($row = mysqli_fetch_array($result)) {
    $check = "";
    $rsv_dow = $row['dayofweek(starttime)'];
    $rsv_time = $row['time'];
    if($rsv_time == '0900') {
      $check = "$rsv_dow"."1";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
    else if($rsv_time == '1030'){
      $check = "$rsv_dow"."2";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
    else if($rsv_time == '1200') {
      $check = "$rsv_dow"."3";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
    else if($rsv_time == '1330') {
      $check = "$rsv_dow"."4";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
    else if($rsv_time == '1500') {
      $check = "$rsv_dow"."5";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
    else if($rsv_time == '1630') {
      $check = "$rsv_dow"."6";
      echo "document.getElementById('$check').style.backgroundColor ='red';";
    }
}
echo "</script>";

?>
