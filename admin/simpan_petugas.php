<?php
require '../koneksi.php';

// Ambil data dari form
$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

// Query untuk menyimpan data petugas
$sql = mysql_query("INSERT INTO petugas (id_petugas, nama_petugas, username, password, telp, level) VALUES ('$id', '$nama', '$user', '$pass', '$telp', '$level')");

// Cek apakah query berhasil dieksekusi
if ($sql) {
    ?>
    <script type="text/javascript">
        alert('Data berhasil disimpan');
        window.location='admin.php?url=lihat_petugas';
    </script>
    <?php
} else {
    // Tampilkan pesan error jika query gagal dieksekusi
    die(mysql_error());
}
?>
