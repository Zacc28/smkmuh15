<?php
include '../koneksi.php';

$idJurusan = $_POST['idJurusan'];
$iconJurusan = $_POST['iconJurusan'];
$namaJurusan = $_POST['namaJurusan'];

$query = "UPDATE tb_jurusan SET icon_jurusan = '$iconJurusan', nama_jurusan = '$namaJurusan' WHERE id_jurusan = '$idJurusan'";
if (mysqli_query($conn, $query)) {
    header("Location: pages-jurusan.php?pesan=update_success");
    exit;
} else {
    // Jika gagal mengunggah berkas
    header("Location: pages-jurusan.php?pesan=update_fail");
    exit;
}
?>
