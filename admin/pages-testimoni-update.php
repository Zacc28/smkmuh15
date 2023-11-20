<?php
include '../koneksi.php';

$idAlumni = $_POST['idAlumni'];
$namaAlumni = $_POST['namaAlumni'];
$profesiAlumni = $_POST['profesiAlumni'];
$komentarAlumni = $_POST['komentarAlumni'];
$hiddenImage = $_POST['hiddenImage'];

// Tentukan direktori tujuan berkas yang diunggah
$target_dir = "assets/img/testimoni/";
$imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

// Memeriksa apakah berkas diunggah dengan sukses
if (isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {

    // Validasi ukuran berkas
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
        header("Location: pages-testimoni.php?pesan=file_too_large");
        exit;
    }

    $fotoAlumni = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fotoAlumni;
    $target_file_delete = $target_dir . $hiddenImage;

    // Hapus foto lama jika ada
    if (file_exists($target_file_delete)) {
        unlink($target_file_delete);
    }

    // Memeriksa apakah nama file sudah ada di direktori
    if (file_exists($target_file)) {
        header("Location: pages-testimoni.php?pesan=file_duplicate");
        exit;
    }

    // Upload berkas dan simpan nama gambar di variabel seperti $fotoAlumni
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Update database
        $query = "UPDATE tb_testimoni SET foto_alumni = '$fotoAlumni', nama_alumni = '$namaAlumni', profesi_alumni = '$profesiAlumni', komentar_alumni = '$komentarAlumni' WHERE id_alumni = '$idAlumni'";
        if (mysqli_query($conn, $query)) {
            header("Location: pages-testimoni.php?pesan=update_success");
            exit;
        } else {
            // Jika terdapat kesalahan dalam pengolahan database
            header("Location: pages-testimoni.php?pesan=database_error");
            exit;
        }
    } else {
        // Jika gagal mengunggah berkas
        header("Location: pages-testimoni.php?pesan=update_fail");
        exit;
    }
} else {
    // Jika tidak ada berkas yang diunggah atau terdapat kesalahan
    $fotoAlumni = $hiddenImage;

    // Update database
    $query = "UPDATE tb_testimoni SET foto_alumni = '$fotoAlumni', nama_alumni = '$namaAlumni', profesi_alumni = '$profesiAlumni', komentar_alumni = '$komentarAlumni' WHERE id_alumni = '$idAlumni'";
    if (mysqli_query($conn, $query)) {
        header("Location: pages-testimoni.php?pesan=update_success");
        exit;
    } else {
        // Jika terdapat kesalahan dalam pengolahan database
        header("Location: pages-testimoni.php?pesan=database_error");
        exit;
    }
}
?>
