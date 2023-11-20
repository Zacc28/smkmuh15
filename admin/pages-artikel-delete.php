<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT gambar_sampul FROM tb_artikel WHERE id_artikel = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['gambar_sampul'];
$filepath = "assets/img/artikel/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_artikel WHERE id_artikel=$id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-artikel.php?pesan=delete_success");
} else {
  header("location:pages-artikel.php?pesan=database_error");
}

mysqli_close($conn);
