<?php
include '../koneksi.php';

$tahunAjaran = $_POST['tahunAjaran'];
$jumlahSiswa = $_POST['jumlahSiswa'];
$jumlahGuru = $_POST['jumlahGuru'];
$jumlahKelas = $_POST['jumlahKelas'];
  
$query = "INSERT INTO tb_statistik (tahun_ajaran, jumlah_siswa, jumlah_guru, jumlah_kelas) VALUES ('$tahunAjaran', '$jumlahSiswa', '$jumlahGuru', '$jumlahKelas')";
    if (mysqli_query($conn, $query)) {
        header("location:pages-statistik.php?pesan=upload_success");
    }else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-statistik.php?pesan=upload_fail");
    }

?>

