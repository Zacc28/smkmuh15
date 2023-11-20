<?php
include '../koneksi.php';

$id = $_GET['id'];

$query = "SELECT foto_user FROM tb_user WHERE id_user = $id LIMIT 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$img = $row['foto_user'];
$filepath = "assets/img/user/".$img;

// sql to delete a record
$sql = "DELETE FROM tb_user WHERE id_user=$id";

if (mysqli_query($conn, $sql)) {
  if (file_exists($filepath)) {
    unlink($filepath);
  }
    header("location:pages-user.php?pesan=delete_success");
} else {
  header("location:pages-user.php?pesan=database_error");
}

mysqli_close($conn);
