<?php
include '../koneksi.php';

$fotoPimpinan = basename($_FILES["fileToUpload"]["name"]);
$namaPimpinan = $_POST['namaPimpinan'];
$jabatanPimpinan = $_POST['jabatanPimpinan'];
$twitterPimpinan = $_POST['twitterPimpinan'];
$facebookPimpinan = $_POST['facebookPimpinan'];
$instagramPimpinan = $_POST['instagramPimpinan'];
$linkedinPimpinan = $_POST['linkedinPimpinan'];

$target_dir = "assets/img/pimpinan/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Validasi ukuran berkas
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
    header("Location: pages-pimpinan.php?pesan=file_too_large");
    exit;
}

if (!file_exists($target_file)) {
    // if everything is ok, try to upload file
    $query = "INSERT INTO tb_pimpinan (foto_pimpinan, nama_pimpinan, jabatan_pimpinan, twitter_pimpinan, facebook_pimpinan, instagram_pimpinan, linkedin_pimpinan) VALUES ('$fotoPimpinan', '$namaPimpinan', '$jabatanPimpinan', '$twitterPimpinan', '$facebookPimpinan', '$instagramPimpinan', '$linkedinPimpinan')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        header("location:pages-pimpinan.php?pesan=upload_success");
    } else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-pimpinan.php?pesan=upload_fail");
    }
}else{
    header("location:pages-pimpinan.php?pesan=file_duplicate");
}

?>

