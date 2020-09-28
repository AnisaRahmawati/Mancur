<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appland Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap-fileupload.css" />

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  </head>

  <body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Isi Identitas</a></h1>
      </div>

	<nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="curhat.php">Curhat</a></li>
          <li><a href="problem_solving.php">Problem Solving</a></li>
          <li><a href="Sharing.php">Sharing Pengalaman</a></li>
          <li><a href="kirim_quote.php">Kirim Quote</a></li>

          <li class="get-started"><a href="index.php">Kembali</a></li>
        </ul>
      </nav><!-- .nav-menu -->
	  </div>
  </header><!-- End Header -->




<!-- ======= Hero Section ======= -->
  <section id="identitas" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
             <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
             	<div class="form-group "> <br> <br>
				  <label class="control-label col-lg-2">Foto</label>
				  <div class="col-lg-10">

				  <div class="fileupload fileupload-new" data-provides="fileupload">

				   <div class="fileupload-new thumbnail" style="width: 150px; height: 100px;">
				      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
				    </div>

			      <div class="fileupload-preview fileupload-exists thumbnail text-center" style="max-width: 200px; max-height: 150px; line-height: 20px;">
			      </div>
			 <!-- tombol pilih foto -->
			      <div>
			      <span class="btn btn-info btn-file">
			        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih Foto</span>
			          <!-- tombol ubah foto -->
			          <span class="fileupload-exists"><i class="fa fa-undo"></i> Ubah</span>
			          <input type="file" class="default" name="foto" />
			        </span>
			          <!-- tombol Batal -->
			        <a href="" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Batal</a>
			      </div>
			<!-- tutup div pilih foto -->
			    </div>	  
			   <br>
			  </div>
			</div>

              <div class="form-group">
                <input placeholder="Nama Samaran" type="text" name="nama_samaran" class="form-control" id="nama_samaran" data-rule="minlen:8" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input placeholder="Umur" type="text" class="form-control" name="umur" id="umur" data-rule="umur" />
                <div class="validate"></div>
              </div>
              <div><button class="btn btn-success" type="submit">Kirim</button></div>
            </form>
		</div>
        </div>
        <div class="col-lg-4" data-aos="fade-up">
          <img src="assets/img/details-4.png" class="img-fluid" alt="" width="300" height="200">
        </div>
      </div>
    </div>

  </section>














 <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap-fileupload.js"></script>

</body>

</html>
