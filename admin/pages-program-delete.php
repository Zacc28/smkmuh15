<?php
include '../koneksi.php';

$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM tb_program WHERE id_program=$id";

if (mysqli_query($conn, $sql)) {
    header("location:pages-program.php?pesan=delete_success");
} else {
  header("location:pages-program.php?pesan=database_error");
}

mysqli_close($conn);
?>