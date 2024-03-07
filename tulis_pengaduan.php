<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pangaduan masyarakat - masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header font-weight-bold text-primary">
    Tulis Pengaduan
  </div>
  <div class="card-body"> 
    <form action="simpan_pengaduan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label for="id_pengaduan">id pengaduan :</label>
        <?php echo '<input class="form-control" type="text" readonly value= '.rand(0000, 9999) . ' name="id_pengaduan">'; ?>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tanggal pengaduan</label>
        <input type="text" name="tgl_pengaduan" value="<?php echo date('d/m/y'); ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input type="text" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis laporan</label>
        <textarea name="isi_laporan" rows="7" class="form-control"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>Unggah foto</label>
        <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png, .gif">
        <font color="red"> *tipe yang bisa diupload adalah .jpg, .jpeg, .png, .gif</font>
      </div>
      <div class="form-group cols-sm-6">
        <input type="submit" value="simpan" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
    </form>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>