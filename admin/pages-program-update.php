<?php
include '../koneksi.php';

$idProgram = $_POST['idProgram'];
$namaProgram = $_POST['namaProgram'];
$iconProgram = $_POST['iconProgram'];
$deskripsiProgram = $_POST['deskripsiProgram'];

$query = "UPDATE tb_program SET nama_program = '$namaProgram', icon_program = '$iconProgram', deskripsi_program = '$deskripsiProgram' WHERE id_program = '$idProgram'";
if (mysqli_query($conn, $query)) {
    header("Location: pages-program.php?pesan=update_success");
    exit;
} else {
    // Jika gagal mengunggah berkas
    header("Location: pages-program.php?pesan=update_fail");
    exit;
}
?>
