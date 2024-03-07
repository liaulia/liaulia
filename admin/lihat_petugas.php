<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>aplikasi pengaduan masyarakat - admin</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
            </div>
            <div class="card-body">
                  <!-- Topbar Search -->
              <form>
               <a href="admin.php?url=tambah_petugas" class="btn btn-primary btn-icon-split mb-3" align="left">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                </a>
              </form>
               <input type="text" id="searchInput" class="form-control bg-light border-0 small mb-3" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID petugas</th>
                      <th>Nama petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telp</th>
                      <th>Level</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php 
                    require '../koneksi.php';
                    $sql=mysql_query("Select * from petugas");
                    while ($data=mysql_fetch_array($sql)) {
                      ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['id_petugas']; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td>
                      <a href="?url=edit_petugas&id=<?php echo $data['id_petugas']; ?>" class="btn btn-primary btn-circle">
                        <i class="fa fa-edit"></i>
                     </a>
                     <a href="hapus_petugas.php?id=<?php echo $data['id_petugas']; ?>" class="btn btn-danger btn-circle"
                      onclick="return confirm('yakin mau hapus?')">
                        <i class="fa fa-trash"></i>
                     </a>
                     </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; li</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
