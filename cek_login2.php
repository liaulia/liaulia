<?php
// cek_login.php
require 'koneksi.php';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysql_query("SELECT * FROM petugas WHERE username = '$user' AND password='$pass'");
    $cek=mysql_num_rows($sql);

        if ($cek>0) 
        {
          $data=mysql_fetch_array($sql);
          if ($data['level']=="admin") 
          {
            session_start();
            $_SESSI0N['id_petugas'] = $data['id_petugas'];
            $_SESSION['user'] = $user;
            $_SESSION['nama'] = $data['nama_petugas'];
            $_SESSION['level'] = $data['level'];
            header('location:admin/admin.php');
            } 
         else if ($data['level']=="petugas") 
         {
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['nama'] = $data['nama_petugas'];
            $_SESSION['level'] = $data['level'];
            header('location:petugas/petugas.php');
        }
        } else {
?>
            <script type="text/javascript">
                alert('username atau password tidak ditemukan');
                window.location = "index2.php";
            </script>
            <?php
        }
    ?>