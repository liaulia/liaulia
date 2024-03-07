<?php
// Menghubungkan ke database
require '../koneksi.php';

$nik=$_GET['nik'];

$sql = mysql_query("DELETE FROM masyarakat WHERE nik = '$nik'");

if ($sql) { ?>

        <script type="text/javascript">
            alert('Data berhasil dihapus');
            window.location='admin.php?url=lihat_masyarakat';
        </script>
<?php } ?>