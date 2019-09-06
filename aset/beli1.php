<?php
 require 'config.php';

  if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $result=mysqli_query($conn,"SELECT * FROM profile WHERE email='$email'");

    if(mysqli_num_rows($result)===1){
      $row=mysqli_fetch_assoc($result);
      if(password_verify($password,$row["password"])){
        header("Location:../index.php");
        exit;
      }
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Meuli-Tiket.com</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/belii1.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-sm-offset-1">
            <a href="#"><img src="../img/logoo.png"></a>
          </div>
          <div class="col-sm-3 col-sm-offset-2">
            <ul class="ul1">
              <li><a href="">TIX</a></li>
              <li><a href="">Partner</a></li>
              <li class="garis"><a href="">idr</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-1">
            <ul class="nav nav-pills">
            <li role="presentation"><a href="#">Pesawat</a></li>
            <li role="presentation"><a href="#">Hotel</a></li>
            <li role="presentation"><a href="#">Kereta Api</a></li>
            <li role="presentation"><a href="#">Sewa Mobil</a></li>
            <li role="presentation" class="active"><a href="#">Entertainment</a></li>
          </ul>
          </div>
          <div class="col-sm-4">
            <ul class="ul3">
              <li><a href="">Promo</a></li>
              <li><a href="">Cek Pesanan</a></li>
              <li class="garis"><a href="">Log In</a></li>
            </ul>
          </div>
        </div>  
      </div>
      <hr>
    </header>

    <div id="beli" class="container">
      <div id="judul" class="row text-center">
        <h3><b>The Gentleman's Indonesia Tour Jakarta 2018</b></h3>
        <span>04 Nov 2018 - 17.00 s/d 23.59</span><input type="button" name="now" value="Pesan Sekarang">
      </div>
      <div class="row text-center">
        <img src="../img/1.jpg">
      </div>
      <div class="row text-center">
        <table border="1">
          <tr>
            <th>Tiket untuk The Gentleman's Indonesia Tour Jakarta 2018</th>
          </tr>
          <tr>
            <td><p>Festival</p><p>@ IDR 600.000,00</p></td>
          </tr>
        </table>
      </div>
    </div>


    <hr>

    <footer>
      <div class="container">
        <div id="href" class="row text-center">
          <a href=""><p>F</p></a>
          <a href=""><p id="yt">Y</p></a>
          <a href=""><p id="wa">W</p></a>
        </div>
        <div class="row text-center">
          <h3><b>PT.Aja Tiket</b></h3>
        </div>
        <div class="row text-center">
          <p>&copy; 2018 PT.Aja Tiket. All Reserved</p>
        </div>
      </div>  
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>