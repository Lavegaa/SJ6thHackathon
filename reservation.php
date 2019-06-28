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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/reservation.css">
  <link rel="stylesheet" href="css/nav.css" />
  <title>Resevation</title>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reserve Room</h4>
        </div>
        <div class="modal-body">
          <div class="time-table">
            <table>
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


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- nav -->
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
      <span class="username">
        <p><input type="text" name="ID" id="userid"> 님,</p>
      </span>
    </div>
  </div>
</nav>

<div class="fast-reserve">
  <div id="fast-box">
    <h2><br />가장 최근 예약을 통해
      <br />빠른 예약을 해보세요</h2>
  </div>
</div>
  <!-- Container -->
  <div class="main_container">
    <div class="room_talk">
      <h3>스터디 룸을 예약하기</h3>
      <ul class="talk">
        <li id="talk1" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="talk1_img"></div>
          <div id="talk1_txt">
            <p>
              <br /><br />
              &nbsp; 의자 7개 <br />
              &nbsp; 콘센트 7개 <br />
              &nbsp; 26인치 1개 <br />
            </p>
          </div>
        </li>
        <li id="talk2" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="talk2_img"></div>
          <div id="talk2_txt">
            <p>
              <br /><br />
              &nbsp; 의자 7개 <br />
              &nbsp; 콘센트 7개 <br />
              &nbsp; 26인치 1개 <br />
            </p>
          </div>
        </li>
        <li id="talk3" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="talk3_img"></div>
          <div id="talk3_txt">
            <p>
              <br /><br />
              &nbsp; 의자 7개 <br />
              &nbsp; 콘센트 7개 <br />
              &nbsp; 26인치 1개 <br />
            </p>
          </div>
        </li>
      </ul>
    </div>
    <div class="room_device">
      <h3>기기 룸을 예약하기</h3>
      <ul class="device">
        <li id="device1" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="device1_img"></div>
          <div id="device1_txt">
            <p>
              <br /><br />
              &nbsp; vr기기 3개 <br />
              &nbsp; 26인치 1개 <br />
            </p>
          </div>
        </li>
        <li id="device2" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="device2_img"></div>
          <div id="device2_txt">
            <p>
              <br /><br />
              &nbsp; 의자 7개 <br />
              &nbsp; sound 장치<br />
              &nbsp; makers <br />
            </p>
          </div>
        </li>
        <li id="device3" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="device3_img"></div>
          <div id="device3_txt">
            <p>
              <br /><br />
              &nbsp; 3D 프린트 5개 <br />
            </p>
          </div>
        </li>
        <li id="device4" class="btn-lg" data-toggle="modal" data-target="#myModal">
          <div id="device4_img"></div>
          <div id="device4_txt">
            <p>
              <br /><br />
              &nbsp; 카메라 3개 <br />
              &nbsp; 스크린 1개 <br />
              &nbsp; 크로마키 4개 <br />
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </div>


</body>
<script>
var html_userid ="<?=$ID?>";
var useridVal = document.getElementById('userid');
useridVal.value = html_userid;
</script>

</html>
