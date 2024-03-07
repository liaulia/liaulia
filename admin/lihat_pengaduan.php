<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplikasi pengaduan masyarakat - admin</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6>
                        </div>
                        <!-- Topbar Search -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <input type="text" id="searchInput" class="form-control bg-light border-0 small mb-3" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            </form>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>ID Pengaduan</th>
                                        <th>Tanggal</th>
                                        <th>NIK</th>
                                        <th>Isi Laporan</th>
                                        <th>Foto</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    require '../koneksi.php';
                                    $sql=mysql_query("Select * from pengaduan");
                                    while ($data=mysql_fetch_array($sql)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data['id_pengaduan']; ?></td>
                                            <td><?php echo $data['tgl_pengaduan']; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['isi_laporan']; ?></td>
                                            <td><?php echo $data['foto']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <!-- Custom script for search -->
    <script>
        // Ambil elemen input pencarian
        var searchInput = document.getElementById('searchInput');

        // Tambahkan event listener untuk memantau perubahan input
        searchInput.addEventListener('input', function() {
            searchTable();
        });

        // Fungsi untuk melakukan pencarian dan filter tabel
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            // Loop melalui semua baris tabel, sembunyikan yang tidak cocok dengan kriteria pencarian
            for (i = 0; i < tr.length; i++) {
                var found = false; // Menandai apakah data cocok dengan kriteria pencarian
                // Loop melalui seluruh kolom data pada baris tertentu
                for (var j = 0; j < tr[i].cells.length; j++) {
                    td = tr[i].cells[j];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        // Cek apakah nilai kolom cocok dengan kriteria pencarian
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            found = true;
                            break; // Hentikan pencarian saat nilai cocok ditemukan
                        }
                    }
                }
                // Tampilkan atau sembunyikan baris berdasarkan hasil pencarian
                if (found) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
