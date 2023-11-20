<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT logo_partnership FROM tb_partnership WHERE id_partnership = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['foto_partnership'];
$filepath = "assets/img/partnership/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_partnership WHERE id_partnership=$id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-partnership.php?pesan=delete_success");
} else {
  header("location:pages-partnership.php?pesan=database_error");
}

mysqli_close($conn);
?>