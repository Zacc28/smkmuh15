<?php
include '../koneksi.php';

$idUser = $_POST['idUser'];
$namaUser = $_POST['namaUser'];
$jabatanUser = $_POST['jabatanUser'];
$usernameUser = $_POST['usernameUser'];
$passwordUser = $_POST['passwordUser'];
$tentangUser = $_POST['tentangUser'];
$hiddenImage = $_POST['hiddenImage'];

// Tentukan direktori tujuan berkas yang diunggah
$target_dir = "assets/img/user/";
$imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

// Memeriksa apakah berkas diunggah dengan sukses
if (isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {

    // Validasi ukuran berkas
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
        header("Location: pages-user.php?pesan=file_too_large");
        exit;
    }

    $fotoUser = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fotoUser;
    $target_file_delete = $target_dir . $hiddenImage;

    // Hapus foto lama jika ada
    if (file_exists($target_file_delete)) {
        unlink($target_file_delete);
    }

    // Memeriksa apakah nama file sudah ada di direktori
    if (file_exists($target_file)) {
        header("Location: pages-user.php?pesan=file_duplicate");
        exit;
    }

    // Upload berkas dan simpan nama gambar di variabel seperti $fotoUser
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Update database
        $query = "UPDATE tb_user SET foto_user = '$fotoUser', nama_user = '$namaUser', jabatan_user = '$jabatanUser', username_user = '$usernameUser', password_user = '$passwordUser', tentang_user = '$tentangUser' WHERE id_user = '$idUser'";
        if (mysqli_query($conn, $query)) {
            header("Location: pages-user.php?pesan=update_success");
            exit;
        } else {
            // Jika terdapat kesalahan dalam pengolahan database
            header("Location: pages-user.php?pesan=database_error");
            exit;
        }
    } else {
        // Jika gagal mengunggah berkas
        header("Location: pages-user.php?pesan=update_fail");
        exit;
    }
} else {
    // Jika tidak ada berkas yang diunggah atau terdapat kesalahan
    $fotoUser = $hiddenImage;

    // Update database
    $query = "UPDATE tb_user SET foto_user = '$fotoUser', nama_user = '$namaUser', jabatan_user = '$jabatanUser', username_user = '$usernameUser', password_user = '$passwordUser', tentang_user = '$tentangUser' WHERE id_user = '$idUser'";
    if (mysqli_query($conn, $query)) {
        header("Location: pages-user.php?pesan=update_success");
        exit;
    } else {
        // Jika terdapat kesalahan dalam pengolahan database
        header("Location: pages-user.php?pesan=database_error");
        exit;
    }
}
