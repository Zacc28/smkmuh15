<?php
include '../koneksi.php';

$idSarpras = $_POST['idSarpras'];
$namaSarpras = $_POST['namaSarpras'];
$deskripsiSarpras = $_POST['deskripsiSarpras'];
$kategoriSarpras = $_POST['kategoriSarpras'];
$hiddenImage = $_POST['hiddenImage'];

// Tentukan direktori tujuan berkas yang diunggah
$target_dir = "assets/img/sarpras/";
$imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

// Memeriksa apakah berkas diunggah dengan sukses
if (isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {

    // Validasi ukuran berkas
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
        header("Location: pages-sarpras.php?pesan=file_too_large");
        exit;
    }

    $fotoSarpras = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fotoSarpras;
    $target_file_delete = $target_dir . $hiddenImage;

    // Hapus foto lama jika ada
    if (file_exists($target_file_delete)) {
        unlink($target_file_delete);
    }

    // Memeriksa apakah nama file sudah ada di direktori
    if (file_exists($target_file)) {
        header("Location: pages-sarpras.php?pesan=file_duplicate");
        exit;
    }

    // Upload berkas dan simpan nama gambar di variabel seperti $fotoAlumni
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Update database
        $query = "UPDATE tb_sarpras SET foto_sarpras = '$fotoSarpras', nama_sarpras = '$namaSarpras', deskripsi_sarpras = '$deskripsiSarpras', kategori_sarpras = '$kategoriSarpras' WHERE id_sarpras = '$idSarpras'";
        if (mysqli_query($conn, $query)) {
            header("Location: pages-sarpras.php?pesan=update_success");
            exit;
        } else {
            // Jika terdapat kesalahan dalam pengolahan database
            header("Location: pages-sarpras.php?pesan=database_error");
            exit;
        }
    } else {
        // Jika gagal mengunggah berkas
        header("Location: pages-sarpras.php?pesan=update_fail");
        exit;
    }
} else {
    // Jika tidak ada berkas yang diunggah atau terdapat kesalahan
    $fotoSarpras = $hiddenImage;

    // Update database
    $query = "UPDATE tb_sarpras SET foto_sarpras = '$fotoSarpras', nama_sarpras = '$namaSarpras', deskripsi_sarpras = '$deskripsiSarpras', kategori_sarpras = '$kategoriSarpras' WHERE id_sarpras = '$idSarpras'";
    if (mysqli_query($conn, $query)) {
        header("Location: pages-sarpras.php?pesan=update_success");
        exit;
    } else {
        // Jika terdapat kesalahan dalam pengolahan database
        header("Location: pages-sarpras.php?pesan=database_error");
        exit;
    }
}
?>
