<?php
include '../koneksi.php';

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM tb_jurusan WHERE id_jurusan=$id";

if (mysqli_query($conn, $sql)) {
    header("location:pages-jurusan.php?pesan=delete_success");
} else {
  header("location:pages-jurusan.php?pesan=database_error");
}

mysqli_close($conn);
?>