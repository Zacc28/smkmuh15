<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT foto_pimpinan FROM tb_pimpinan WHERE id_pimpinan = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['foto_pimpinan'];
$filepath = "assets/img/pimpinan/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_pimpinan WHERE id_pimpinan=$id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-pimpinan.php?pesan=delete_success");
} else {
  header("location:pages-pimpinan.php?pesan=database_error");
}

mysqli_close($conn);
?>