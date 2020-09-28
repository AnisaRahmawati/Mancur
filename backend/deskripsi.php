 <?php 
 session_start();
 if (!isset($_SESSION['id_admin'])) header("location:login.php");
 include "koneksi.php";
 include "header.php";
 $deskripsi = mysqli_query($koneksi, "SELECT * FROM tbl_deskripsi");

 
?>

 <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Deskripsi Aplikasi</h3> <hr>
        <div class="row mt">
          <div class="col-lg-12 mt">
            <div class="row content-panel">

              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Lihat Deskripsi</a>
                  </li>
                 
                  <li>
                    <a data-toggle="tab" href="#edit">Edit Deskripsi</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->

              <div class="panel-body">
                <div class="tab-content">
                <?php while($data = mysqli_fetch_assoc($deskripsi)) : ?>
                  <!-- lihat deskripsi -->
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="detailed mt">
                          <h4><?php echo $data['judul']; ?></h4>
                          <div class="recent-activity">
                            <div class="activity-icon bg-theme"><i class="fa fa-hand-o-down"></i></div>
                            <div class="activity-panel">
                              <h3><?php echo $data['deskripsi']; ?></h3>
                            </div>                          
                          </div>
                        <!-- /detailed -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- edit deskripsi -->
                  <div id="edit" class="tab-pane">
                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <form role="form" class="form-horizontal">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Judul</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="judul" value="<?php echo $data ['judul']; ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Deskripsi</label>
                            <div class="col-lg-10">
                              <textarea rows="10" cols="30" class="form-control" id="deskripsi" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit" name="edit">Simpan</button>
                            </div>
                          </div>
                        </form>

                  <?php endwhile; ?>
                </div>
              </div>

           </div>   
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->


<?php
if(isset($_POST['edit'])) {
  $judul = $_POST['judul'];
  $deskripsi = $_POST['deskripsi'];
  
  $edit = mysqli_query($koneksi, "UPDATE tbl_deskripsi SET
    judul = '$judul',
    deskripsi = '$deskripsi'
    WHERE id_deskripsi = '$id_deskripsi'
    ");

  // cek apakah berhasil atau tidak
  if($edit) {
    echo "
    <script>
    alert ('data berhasil dirubah !');
    window.location.href = 'deskripsi.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('data gagal dirubah!');
    window.location.href= 'deskripsi.php';
    </script>
    ";
  }
}
?>

<?php 
include 'footer.php'; 
?>