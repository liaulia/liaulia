<?php
// Menghubungkan ke database
require '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $telp = $_POST['telp'];

    // Query untuk menyimpan data petugas
    $sql = mysql_query("UPDATE masyarakat SET nama='$nama', username='$user', password='$pass', telp='$telp' WHERE nik='$nik'");

    // Cek apakah query berhasil dieksekusi
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert('Data berhasil diubah');
            window.location='?url=lihat_masyarakat';
        </script>
        <?php
    } else {
        // Tampilkan pesan error jika query gagal dieksekusi
        die(mysql_error());
    }
} else {
    $id = $_GET['id']; // Mengambil ID dari URL
    $sql = mysql_query("SELECT * FROM masyarakat WHERE nik='$id'");
    if ($data = mysql_fetch_array($sql)) {
?>
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
  <div class="card-header font-weight-bold text-primary">
    Edit Data Masyarakat
  </div>
  <div class="card-body">
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>NIK</label>
        <input class="form-control" type="text" name="nik" value="<?php echo $data['nik'] ?>" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $data['password'] ?>" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
        <label>Telp</label>
        <input type="text" name="telp" value="<?php echo $data['telp'] ?>" class="form-control">
      </div>
      <div class="form-group cols-sm-6">
          <a href="?url=lihat_masyarakat" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
          </a>
        <input type="submit" value="edit data" class="btn btn-primary">
        <input type="reset" value="kosongkan" class="btn btn-warning">
      </div>
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
<?php } } ?>
