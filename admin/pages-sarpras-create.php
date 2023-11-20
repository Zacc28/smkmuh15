<?php
include '../koneksi.php';

$fotoSarpras = basename($_FILES["fileToUpload"]["name"]);
$namaSarpras = $_POST['namaSarpras'];
$deskripsiSarpras = $_POST['deskripsiSarpras'];
$kategoriSarpras = $_POST['kategoriSarpras'];
   
$target_dir = "assets/img/sarpras/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Validasi ukuran berkas
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
    header("Location: pages-sarpras.php?pesan=file_too_large");
    exit;
}

if (!file_exists($target_file)) {
    // if everything is ok, try to upload file
    $query = "INSERT INTO tb_sarpras (nama_sarpras, foto_sarpras, deskripsi_sarpras, kategori_sarpras) VALUES ('$namaSarpras', '$fotoSarpras', '$deskripsiSarpras', '$kategoriSarpras')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        header("location:pages-sarpras.php?pesan=upload_success");
    } else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-sarpras.php?pesan=upload_fail");
    }
}else{
    header("location:pages-sarpras.php?pesan=file_duplicate");
}

?>

