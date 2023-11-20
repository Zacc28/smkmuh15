<?php
include '../koneksi.php';

$idContact = $_POST['idContact'];
$emailContact = $_POST['emailContact'];
$telpContact = $_POST['telpContact'];
$alamatContact = $_POST['alamatContact'];

$query = "UPDATE tb_contact SET email_contact = '$emailContact', telp_contact = '$telpContact', alamat_contact = '$alamatContact' WHERE id_contact = '$idContact'";
if (mysqli_query($conn, $query)) {
    header("Location: pages-contact.php?pesan=update_success");
    exit;
} else {
    // Jika gagal mengunggah berkas
    header("Location: pages-contact.php?pesan=update_fail");
    exit;
}
