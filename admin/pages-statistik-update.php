<?php
include '../koneksi.php';

$idStatistik = $_POST['idStatistik'];
$tahunAjaran = $_POST['tahunAjaran'];
$jumlahSiswa = $_POST['jumlahSiswa'];
$jumlahGuru = $_POST['jumlahGuru'];
$jumlahKelas = $_POST['jumlahKelas'];

$query = "UPDATE tb_statistik SET tahun_ajaran = '$tahunAjaran', jumlah_siswa = '$jumlahSiswa', jumlah_guru = '$jumlahGuru', jumlah_kelas = '$jumlahKelas' WHERE id_statistik = '$idStatistik'";
if (mysqli_query($conn, $query)) {
    header("Location: pages-statistik.php?pesan=update_success");
    exit;
} else {
    // Jika gagal mengupdate data
    header("Location: pages-statistik.php?pesan=update_fail");
    exit;
}
?>
