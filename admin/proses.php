<?php
require '../koneksi.php';
$sql=mysql_query("update pengaduan set status='proses' where id_pengaduan='$_GET[id]'");
if ($sql) {
	header('location:admin.php?url=verifikasi_pengaduan');
}
?> 