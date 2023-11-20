<?php
include '../koneksi.php';

$iconJurusan = $_POST['iconJurusan'];
$namaJurusan = $_POST['namaJurusan'];
    
$query = "INSERT INTO tb_jurusan (icon_jurusan, nama_jurusan) VALUES ('$iconJurusan', '$namaJurusan')";
    if (mysqli_query($conn, $query)) {
        header("location:pages-jurusan.php?pesan=upload_success");
    }else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-jurusan.php?pesan=upload_fail");
    }

?>

