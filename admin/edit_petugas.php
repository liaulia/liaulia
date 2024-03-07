<?php
// Menghubungkan ke database
require '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id_petugas'];
    $nama = $_POST['nama_petugas'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $telp = $_POST['telp'];
    $level = $_POST['level'];

    // Query untuk menyimpan data petugas
    $sql = mysql_query("UPDATE petugas SET nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' WHERE id_petugas='$id'");

    // Cek apakah query berhasil dieksekusi
    if ($sql) {
        ?>
        <script type="text/javascript">
            alert('Data berhasil diubah');
            window.location='?url=lihat_petugas';
        </script>
        <?php
    } else {
        // Tampilkan pesan error jika query gagal dieksekusi
        die(mysql_error());
    }
} else {
    $id = $_GET['id']; // Mengambil ID dari URL
    $sql = mysql_query("SELECT * FROM petugas WHERE id_petugas='$id'");
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
    Edit Data Petugas
  </div>
  <div class="card-body">
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
        <label>id petugas :</label>
        <input class="form-control" type="text" name="id_petugas" value="<?php echo $data['id_petugas'] ?>" readonly>
      </div>
      <div class="form-group cols-sm-6">
        <label>Nama petugas</label>
        <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>" class="form-control">
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
        <label>Level</label>
        <select class="form-control" name="level">
          <option value="<?php echo $data['level'] ?>"><?php echo $data['level'] ?></option>
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select>
      </div>
      <div class="form-group cols-sm-6">
          <a href="?url=lihat_petugas" class="btn btn-primary btn-icon-split">
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
