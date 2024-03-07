<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pangaduan masyarakat - admin</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header text-primary">
    Tanggapan
  </div>
  <div class="card-body">
  <div>
    <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i>
      </span>
      <span class="text">Kembali</span>
    </a>
  </div>
  <br>
    <form action="simpan_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label for="id_tanggapan">id tanggapan</label>
        <?php echo '<input class="form-control" type="text" readonly value= '.rand(1, 999) . ' name="id_tanggapan">'; ?>
      </div>
     <div class="form-group cols-sm-6">
        <label>ID pengaduan</label>
        <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tanggal tanggapan</label>
        <input type="text" name="tgl_tanggapan" value="<?php echo date('y-m-d') ?>" class="form-control" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Tulis tanggapan</label>
        <textarea name="tanggapan" rows="7" class="form-control"></textarea>
      </div>
      <div class="form-group cols-sm-6">
        <label>ID petugas</label><br>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
      </div>

      <input type="submit" name="" class="btn btn-primary btn-user" value="Tanggapi!">

    </form>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>