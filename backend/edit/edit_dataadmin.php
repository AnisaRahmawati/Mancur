<?php
session_start();
include '../header.php';
include "../koneksi.php";

 // ambil data dari URL
$id_admin = @$_GET['id_admin'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id_admin = '$id_admin'");

$data = mysqli_fetch_assoc($query);
?>

<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i>Edit Data Admin</h3> <hr>

 <div class="row mt-2">
  <div class="col-lg-12 mt-2">
    <div class="form-panel">
      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal style-form">
       

       <div class="form-group">
         <label class="control-label col-md-3">
           Nama Admin 
         </label>

         <div class="col-md-9">
           <input class=" form-control" name="nama_admin" type="text"  value="<?php echo $data['nama_admin']; ?>"  />
         </div>
       </div>

     <div class="form-group">
          <label class="control-label col-md-3">Foto</label>
          <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                 <img src="../img/admin/<?= $data['foto']; ?>" width="150">
              </div>

              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
              <div>
                <span class="btn btn-theme02 btn-file">
                  <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih Foto</span>
                <span class="fileupload-exists"><i class="fa fa-undo"></i> Ubah</span>
                <input type="file" class="default" name="foto_petugas" />
                </span>
                <a href="" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
              </div>
            </div>
           
          </div>
        </div>

        <div class="form-group">
         <label class="control-label col-md-3">
           Username 
         </label>

         <div class="col-md-9">
           <input class=" form-control" name="username" value="<?php echo $data['username']; ?>" type="text"  />
         </div>
       </div>


        <div class="form-group">
         <label class="control-label col-md-3">
           Password 
         </label>

         <div class="col-md-9">
           <input class=" form-control" name="password" value="<?php echo $data['password']; ?>" type="password"  />
           <br>
          <button class="btn btn-primary" type="submit" name="edit">Simpan</button>

         </div>
       </div>

   </form>
</div>
</div>
</div>




  </section>
</section>



<?php 
mysqli_close($koneksi);
include '../footer.php'; 
?>