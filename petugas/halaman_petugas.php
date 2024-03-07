<?php
// session_start();

if (isset($_GET['url'])) {
	$url = $_GET['url'];

	switch ($url) {
		case 'verifikasi_pengaduan':
			include 'verifikasi_pengaduan.php';
			break;
		
		case 'lihat_pengaduan':
			include 'lihat_pengaduan.php';
			break;

		case 'detail_pengaduan':
			include 'detail_pengaduan.php';
			break;

		case 'lihat_tanggapan':
			include 'lihat_tanggapan.php';
			break;

		case 'verifikasi_pengaduan2':
			include 'verifikasi_pengaduan2.php';
			break;

		case 'detail_pengaduan2':
			include 'detail_pengaduan2.php';
			break;

		case 'tanggapan':
			include 'tanggapan.php';
			break;
	}
} else {
?>
Selamat datang!<br>
Anda login sebagai: <h5><b><?php echo $_SESSION['nama']; ?></b></h5>
<?php
require '../koneksi.php';
$sql=mysql_query("select * from pengaduan where status='0'");
if($cek=mysql_num_rows($sql)){}

$query=mysql_query("select * from pengaduan where status='proses'");
if($queryy=mysql_num_rows($query))

{
  ?>
<br>
<div class="row">
      <div class="col-xl-3 col-md-6 mb-4" href="?url=verifikasi_pengaduan">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <a  href="?url=verifikasi_pengaduan">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> laporan dari masyarakat yang harus diverifikasi
                       </div>
                      </a>
                      </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                        <a  href="?url=verifikasi_pengaduan2">
                          <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $queryy; ?> laporan dari masyarakat yang harus ditanggapi</div>
                        </a>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                        <span class="badge badge-danger badge-counter"><?php echo $queryy; ?></span>
                     </div>
                  </div>
                </div>
              </div>
            </div>
</div>
<?php
}}
?>