<?php
require 'koneksi.php';
$id = $_POST['id_pengaduan'];
$tgl = date('y/m/d');
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$status=0;

$sql = mysql_query("insert into pengaduan(id_pengaduan, tgl_pengaduan, nik, isi_laporan, foto, status) values('$id', '$tgl', '$nik', '$isi', '$foto', '$status')");
move_uploaded_file($file, "img/".$foto);

if ($sql) {
	?>
		<script type="text/javascript">
          alert('data berhasil disimpan!');
          window.location.href = "masyarakat.php?url=lihat_pengaduan";
        </script>";
   <?php
} else {
    // Tampilkan pesan error jika query gagal dieksekusi
    die(mysql_error());
}
?>