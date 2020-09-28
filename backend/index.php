 <?php 
 session_start();
 if (!isset($_SESSION['id_admin'])) header("location:login.php");

 include "koneksi.php";
 include "header.php";
?>

 <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Blank Page</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <p>Place your content here.</p>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

<?php 
mysqli_close($koneksi);
include 'footer.php'; 
?>