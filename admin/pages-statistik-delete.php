<?php
include '../koneksi.php';

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM tb_statistik WHERE id_statistik=$id";

if (mysqli_query($conn, $sql)) {
    header("location:pages-statistik.php?pesan=delete_success");
} else {
  header("location:pages-statistik.php?pesan=database_error");
}

mysqli_close($conn);
?>