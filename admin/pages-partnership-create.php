<?php
include '../koneksi.php';

$fotoPartnership = basename($_FILES["fileToUpload"]["name"]);
$namaPartnership = $_POST['namaPartnership'];
    
$target_dir = "assets/img/partnership/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Validasi ukuran berkas
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
    header("Location: pages-partnership.php?pesan=file_too_large");
    exit;
}

if (!file_exists($target_file)) {
    // if everything is ok, try to upload file
    $query = "INSERT INTO tb_partnership (logo_partnership, nama_partnership) VALUES ('$fotoPartnership', '$namaPartnership')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        header("location:pages-partnership.php?pesan=upload_success");
    } else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-partnership.php?pesan=upload_fail");
    }
}else{
    header("location:pages-partnership.php?pesan=file_duplicate");
}

?>

