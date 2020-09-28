<?php 
include "koneksi.php";
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username = '$username' AND password='$password'");
  $data = mysqli_fetch_assoc($login);
  $cek=mysqli_num_rows($login);

  if ($cek > 0) {
    session_start();
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['foto'] = $data['foto'];

    echo "<script>
            alert('Anda berhasil login');
            window.location='index.php'
          </script>
          ";
     } else {
      echo "<script>
            alert('Gagal Login');
            window.location='login.php'
            </script>
            ";
         }
      } 
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    
<?php 
    if( isset($error) ) {
    echo "<script>
            alert('Username / Password yang anda masukan salah');
          </script>";
        }
?>


  <div id="login-page">
    <div class="container">
      <form class="form-login" action="login.php" method="post">
        <h2 class="form-login-heading">LOGIN</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Username" name="username" autofocus required>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <br>
          <button class="btn btn-theme btn-block"  type="submit" name="login" value="login"><i class="fa fa-lock"></i> LOGIN</button>
          <hr>  
        </div>
      
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
