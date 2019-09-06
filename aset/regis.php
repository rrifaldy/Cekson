<?php
  require "config.php";


  if (isset($_POST["reg"])) {
    if(reg($_POST) > 0 ){
      echo "  <script>
            alert('regis berhasil');
          </script>";
    }
    else{
      echo mysqli_error($conn);
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
    <title>Gow Ticketing</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/regis.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="page-header">
            <a href="#"><img src="../img/tiket.png"></a>  
			<a href="aset/index.php"><button>Home</button>
			<a href="aset/login.php"target="_blank"><button>Login</button>
			<a href="aset/regis.php"target="_blank"><button>Registration</button>
			</div>
			</header>     
          </div>
        </div>  
      </div>
      <hr>
    </header>

    <div id="form" class="container text-center">
      <div class="row">
        <h3><b>Daftar Sekarang !</b></h3>
      </div>
      <div id="reg" class="row">
        <form method="post" action="">
          <input type="text" name="nama" placeholder="Nama Lengkap"><br>
          <input type="email" name="email" placeholder="Alamat Email"><br>
          <input type="password" name="password" placeholder="Kata Sandi"><br>
          <input type="password" name="passwordd" placeholder="Konfirmasi Kata Sandi"><br>
          <input type="submit" name="reg" value="Daftar" id="daftar">
          <p>Sudah Punya? <a href="login.php">Log In</a></p>
        </form>
      </div>
    </div>

    <hr id="hr">

    <footer>
      <div class="container">
        <div id="href" class="row text-center">
          <a href=""><p>F</p></a>
          <a href=""><p id="yt">Y</p></a>
          <a href=""><p id="wa">W</p></a>
        </div>
        <div class="row text-center">
          <h3><b>Gow Ticketing</b></h3>
        </div>
        <div class="row text-center">
          <p>&copy; 2018 Gow Ticketing. All Reserved</p>
        </div>
      </div>  
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>