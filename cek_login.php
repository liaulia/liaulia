<?php
// cek_login.php
require 'koneksi.php';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = mysql_query("SELECT * FROM masyarakat WHERE username = '$user' AND password='$pass'");
    $cek=mysql_num_rows($sql);

        if ($cek>0) 
        {
            $data=mysql_fetch_array($sql);
            session_start();
            $_SESSION['nama'] = $user;
            $_SESSION['nik'] = $data['nik'];
            header('location: masyarakat.php');
        } else 
        {
?>
            <script type="text/javascript">
                alert('username atau password tidak ditemukan');
                window.location = "index.php";
            </script>
            <?php
        }
    ?>