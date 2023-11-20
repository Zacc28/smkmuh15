<?php
include '../koneksi.php';

$fotoSampul = basename($_FILES["fileToUpload"]["name"]);
$judulArtikel = $_POST['judulArtikel'];
$isiArtikel = $_POST['isiArtikel'];
$tanggalPublikasi = $_POST['tanggalPublikasi'];
$kategoriArtikel = $_POST['kategoriArtikel'];

// var_dump($isiArtikel);

// Tentukan direktori tempat berkas gambar akan disimpan
$target_dir = "assets/img/artikel/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Validasi ukuran berkas gambar
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Ukuran maksimum: 5MB
    header("Location: pages-artikel.php?pesan=file_too_large");
    exit;
}

// Validasi tipe berkas gambar
if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "png") {
    header("Location: pages-artikel.php?pesan=invalid_file_type");
    exit;
}

if (!file_exists($target_file)) {
    // Jika semua validasi berhasil, lakukan pengiriman dan penyimpanan data artikel
    $query = "INSERT INTO tb_artikel (gambar_sampul, judul_artikel, isi_artikel, tanggal_publikasi, kategori_artikel)
              VALUES ('$fotoSampul', '$judulArtikel', '$isiArtikel', '$tanggalPublikasi', '$kategoriArtikel')";
        
    if (mysqli_query($conn, $query)) {
        // Pindahkan berkas gambar sampul ke direktori yang ditentukan
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        header("location:pages-artikel.php?pesan=upload_success");
    } else {
        header("location:pages-artikel.php?pesan=upload_fail");
    }
} else {
    header("location:pages-artikel.php?pesan=file_duplicate");
}
