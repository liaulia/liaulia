<?php
// Menghubungkan ke database
require '../koneksi.php';

$id=$_GET['id'];

$sql = mysql_query("DELETE FROM petugas WHERE id_petugas = '$id'");

if ($sql) { ?>

        <script type="text/javascript">
            alert('Data berhasil dihapus');
            window.location='admin.php?url=lihat_petugas';
        </script>
<?php } ?>