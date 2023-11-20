<?php
include '../koneksi.php';

$idArtikel = $_POST['idArtikel'];
$judulArtikel = $_POST['judulArtikel'];
$isiArtikel = $_POST['isiArtikel'];
$tanggalPublikasi = $_POST['tanggalPublikasi'];
$kategoriArtikel = $_POST['kategoriArtikel'];

// Tentukan direktori tujuan berkas gambar sampul yang diunggah
$target_dir = "assets/img/artikel/";
$imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

// Memeriksa apakah berkas diunggah dengan sukses
if (isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
    // Validasi ukuran berkas
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
        header("Location: pages-artikel.php?pesan=file_too_large");
        exit;
    }

    $fotoSampul = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fotoSampul;

    // Hapus foto sampul lama jika ada
    $query_get_old = "SELECT gambar_sampul FROM tb_artikel WHERE id_artikel = '$idArtikel'";
    $result_get_old = mysqli_query($conn, $query_get_old);
    $row_get_old = mysqli_fetch_assoc($result_get_old);
    $oldImage = $row_get_old['gambar_sampul'];

    if (file_exists($target_file)) {
        if ($oldImage != $fotoSampul) {
            unlink($target_file);
        }
    }

    // Upload berkas dan simpan nama gambar di variabel seperti $fotoSampul
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Update database
        $query = "UPDATE tb_artikel SET gambar_sampul = '$fotoSampul', judul_artikel = '$judulArtikel', isi_artikel = '$isiArtikel', tanggal_publikasi = '$tanggalPublikasi', kategori_artikel = '$kategoriArtikel' WHERE id_artikel = '$idArtikel'";
        if (mysqli_query($conn, $query)) {
            header("Location: pages-artikel.php?pesan=update_success");
            exit;
        } else {
            // Jika terdapat kesalahan dalam pengolahan database
            header("Location: pages-artikel.php?pesan=database_error");
            exit;
        }
    } else {
        // Jika gagal mengunggah berkas
        header("Location: pages-artikel.php?pesan=update_fail");
        exit;
    }
} else {
    // Jika tidak ada berkas yang diunggah atau terdapat kesalahan
    // Update database tanpa mengubah gambar sampul
    $query = "UPDATE tb_artikel SET judul_artikel = '$judulArtikel', isi_artikel = '$isiArtikel', tanggal_publikasi = '$tanggalPublikasi', kategori_artikel = '$kategoriArtikel' WHERE id_artikel = '$idArtikel'";
    if (mysqli_query($conn, $query)) {
        header("Location: pages-artikel.php?pesan=update_success");
        exit;
    } else {
        // Jika terdapat kesalahan dalam pengolahan database
        header("Location: pages-artikel.php?pesan=database_error");
        exit;
    }
}
