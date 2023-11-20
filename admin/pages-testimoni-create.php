<?php
include '../koneksi.php';

$fotoAlumni = basename($_FILES["fileToUpload"]["name"]);
$namaAlumni = $_POST['namaAlumni'];
$profesiAlumni = $_POST['profesiAlumni'];
$komentarAlumni = $_POST['komentarAlumni'];
    
$target_dir = "assets/img/testimoni/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Validasi ukuran berkas
if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
    header("Location: pages-testimoni.php?pesan=file_too_large");
    exit;
}

if (!file_exists($target_file)) {
    // if everything is ok, try to upload file
    $query = "INSERT INTO tb_testimoni (foto_alumni, nama_alumni, profesi_alumni, komentar_alumni) VALUES ('$fotoAlumni', '$namaAlumni', '$profesiAlumni', '$komentarAlumni')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        
        header("location:pages-testimoni.php?pesan=upload_success");
    } else {
        // echo "Gagal menambahkan data: " . mysqli_error($conn);
        header("location:pages-testimoni.php?pesan=upload_fail");
    }
}else{
    header("location:pages-testimoni.php?pesan=file_duplicate");
}

?>

