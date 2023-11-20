<?php
include '../koneksi.php';

$fotoUser = basename($_FILES["fileToUpload"]["name"]);
$namaUser = $_POST['namaUser'];
$jabatanUser = $_POST['jabatanUser'];
$tentangUser = $_POST['tentangUser'];
$usernameUser = $_POST['usernameUser'];
$passwordUser = $_POST['passwordUser'];
    
$target_dir = "assets/img/user/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Validasi ukuran berkas
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
    header("Location: pages-user.php?pesan=file_too_large");
    exit;
}

if (!file_exists($target_file)) {
    // if everything is ok, try to upload file
    $query = "INSERT INTO tb_user (foto_user, nama_user, jabatan_user, tentang_user, username_user, password_user) VALUES ('$fotoUser', '$namaUser', '$jabatanUser', '$tentangUser', '$usernameUser', '$passwordUser')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        header("location:pages-user.php?pesan=upload_success");
    } else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-user.php?pesan=upload_fail");
    }
}else{
    header("location:pages-user.php?pesan=file_duplicate");
}
