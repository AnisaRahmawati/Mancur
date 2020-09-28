<?php 
session_start();
include "koneksi.php";
include "header.php";
?>


<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i> Data Admin</h3> <hr>

<section id="unseen">
    <table class="table table-bordered table-striped table-condensed">
    <?php 
	  $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
    ?>

      <thead class="text-center">
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama admin</th>
          <th class="text-center">Foto</th>
          <th class="text-center">Username</th>
          <th class="text-center">Password</th>
	      <th class="text-center" scope="col" colspan="2">Aksi</th>

         
        </tr>
      </thead>

      <tbody class="text-center">
      	<?php
        $no = 1;
        while($data = mysqli_fetch_array($tampil)){
    ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $data['nama'] ?></td>
          <td><img src="img/admin/<?php echo $data['foto']; ?>" width="10%"></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['password']; ?></td>
          <td class="text-center">           
	        <a href="edit/edit_dataadmin.php?id_admin=<?=$data['id_admin'];?>"><button type="button" class="btn btn-success"><i class="fa fa-edit"></i></button></a>
	        <a href="hapus/hapus_dataadmin.php?id_admin=<?=$data['id_admin'];?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>

	      </td>
        </tr>
       </tbody>
     <?php } ?>
	</table>
  </section>


</section>
</section>



<?php 
mysqli_close($koneksi);
include 'footer.php'; 
?>