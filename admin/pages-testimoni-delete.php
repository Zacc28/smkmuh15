<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT foto_alumni FROM tb_testimoni WHERE id_alumni = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['foto_alumni'];
$filepath = "assets/img/testimoni/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_testimoni WHERE id_alumni=$id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-testimoni.php?pesan=delete_success");
} else {
  header("location:pages-testimoni.php?pesan=database_error");
}

mysqli_close($conn);
?>