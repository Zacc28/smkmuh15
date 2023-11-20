<?php
include '../koneksi.php';

$namaProgram = $_POST['namaProgram'];
$iconProgram = $_POST['iconProgram'];
$deskripsiProgram = $_POST['deskripsiProgram'];
    
$query = "INSERT INTO tb_program (icon_program, nama_program, deskripsi_program) VALUES ('$iconProgram','$namaProgram','$deskripsiProgram')";
    if (mysqli_query($conn, $query)) {
        header("location:pages-program.php?pesan=upload_success");
    }else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-program.php?pesan=upload_fail");
    }

?>

