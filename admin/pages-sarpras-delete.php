<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT foto_sarpras FROM tb_sarpras WHERE id_sarpras = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['foto_sarpas'];
$filepath = "assets/img/sarpras/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_sarpras WHERE id_sarpras = $id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-sarpras.php?pesan=delete_success");
} else {
  header("location:pages-sarpras.php?pesan=database_error");
}

mysqli_close($conn);
?>