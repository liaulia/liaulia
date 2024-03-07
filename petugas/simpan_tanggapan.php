<?php
// Sertakan koneksi ke database
require '../koneksi.php';

// Periksa apakah semua bidang formulir yang diperlukan diatur
if(isset($_POST['id_tanggapan'], $_POST['id_pengaduan'], $_POST['tgl_tanggapan'], $_POST['tanggapan'], $_POST['id_petugas'])) {
    // Dapatkan data formulir
    $id_tanggapan = $_POST['id_tanggapan'];
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    $st = 'selesai';

    // Persiapkan kueri SQL
    $sql = "INSERT INTO tanggapan (id_tanggapan, id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) VALUES ('$id_tanggapan', '$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')";

    // Jalankan kueri
    $result = mysql_query($sql);

    // Periksa apakah kueri berhasil dieksekusi
    if ($result) {
        // Perbarui status pengaduan
        $update_sql = "UPDATE pengaduan SET status = '$st' WHERE id_pengaduan = '$id_pengaduan'";
        $update_result = mysql_query($update_sql);

        // Alihkan dengan pesan keberhasilan
        if ($update_result) {
            header("Location: petugas.php?url=lihat_pengaduan2");
            exit();
        } else {
            header("Location: ?url=lihat_pengaduan2&error=update_failed");
            exit();
        }
    } else {
        // Alihkan dengan pesan kesalahan
        header("Location: ?url=lihat_pengaduan2&error=insert_failed");
        exit();
    }
} else {
    // Alihkan jika bidang yang diperlukan tidak diatur
    header("Location: ?url=lihat_pengaduan2&error=missing_fields");
    exit();
}
?>
