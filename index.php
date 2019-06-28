<?php
$db_host = "localhost";
$db_user = "root";
$db_passwd = "0000";
$db_name = "";

$conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

$ID = $_POST['ID'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>

    <form id="form_route" method="POST">
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

      <!-- container -->
      <div class="container">
        <div class="reservation" onclick="route()">
          <h1>예약하기</h1>
        </div>

        <div class="eval" onclick="route1()">
          <h1>사용하기</h1>
        </div>
    </div>
    </form>
  </body>
  <script>
  var html_userid ="<?=$ID?>";
  var useridVal = document.getElementById('userid');
  useridVal.value = html_userid;

  function route() {
    document.getElementById("form_route").action ="reservation.php";
    document.getElementById("form_route").submit();
  }

  function route1() {
    document.getElementById("form_route").action ="atten.php";
    document.getElementById("form_route").submit();
  }
  </script>
</html>