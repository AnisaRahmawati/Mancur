<?php 
include 'koneksi.php';
$admin = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin");
$service = mysqli_query($koneksi, "SELECT * FROM tbl_service JOIN tbl_user ON tbl_service.id_user = tbl_user.id_user WHERE status='0' LIMIT 3");
$notifikasi = mysqli_query($koneksi, "SELECT * FROM tbl_service WHERE status='0' ORDER BY id_service DESC");
$jml_notif = mysqli_num_rows($notifikasi);
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Mancur</title>

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
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>MAN<span>CUR</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
         
                
          <!-- inbox masuk-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="inbox.php">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"><?php echo $jml_notif ?></span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Kamu memiliki <?php echo $jml_notif ?> Pesan Baru</p>
              </li>
                <?php while ($data = mysqli_fetch_array($pengaduan)) { ?>

              <li>
                <a href="inbox.php">
                  <span class="photo"><img alt="avatar" src="img/admin/<?php echo $data['foto']; ?>"></span>
                  <span class="subject">
                  <span class="from"><?php echo $data ['nama_samaran']; ?></span>
                  <span class="time"><?php echo $data ['tgl_kirim']; ?></span>
                  </span>
                  <span class="message">
                    <?php echo $data ['isi_curhatan']; ?>
                  </span>
                  </a>
              </li>
                             <?php } ?>

              <li>
                <a href="inbox.php">Lihat semua pesan</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="quote.php">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"><?php echo $jml_notif ?></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow"><?php echo $jml_notif ?> quotes baru dikirim</p>
              </li>
              
              <li>
                <a href="quote.php">Lihat semua quotes yang dikirim</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?');">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <?php $foto = mysqli_fetch_assoc($admin)  ?>

          <p class="centered"><img src="img/admin/<?php echo $_SESSION['foto']; ?>" class="img-circle" width="80"></p>
          <h5 class="centered"><?php echo $_SESSION['nama'];?></h5>
          
          <li>
            <a href="deskripsi.php">
              <i class="fa fa-edit"></i>
              <span>Deskripsi </span>
            </a>
          </li>
        
          <li>
            <a href="inbox.php">
              <i class="fa fa-envelope"></i>
              <span>Pesan </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>

           <li>
            <a href="quote.php">
              <i class="fa fa-quote-left"></i>
              <span>Quote </span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-gears"></i>
              <span>Pengaturan</span>
              </a>
            <ul class="sub">
              <li><a href="deskripsi.php">Deskripsi</a></li>
              <li><a href="service.php">Service</a></li>
              <li><a href="faq.php">FAQ</a></li>
            </ul>
          </li>
          

           <li>
            <a href="data_admin.php">
              <i class="fa fa-user"></i>
              <span>Data admin </span>
              </a>
          </li>

           <li>
            <a href="data_user.php">
              <i class="fa  fa-users"></i>
              <span>Data Users </span>
              </a>
          </li>
          
          
          
          
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
   
 