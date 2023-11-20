<?php
include '../koneksi.php';

$idPimpinan = $_POST['idPimpinan'];
$namaPimpinan = $_POST['namaPimpinan'];
$jabatanPimpinan = $_POST['jabatanPimpinan'];
$twitterPimpinan = $_POST['twitterPimpinan'];
$facebookPimpinan = $_POST['facebookPimpinan'];
$instagramPimpinan = $_POST['instagramPimpinan'];
$linkedinPimpinan = $_POST['linkedinPimpinan'];
$hiddenImage = $_POST['hiddenImage'];

// Tentukan direktori tujuan berkas yang diunggah
$target_dir = "assets/img/pimpinan/";
$imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]), PATHINFO_EXTENSION));

// Memeriksa apakah berkas diunggah dengan sukses
if (isset($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {

    // Validasi ukuran berkas
    if ($_FILES["fileToUpload"]["size"] > 5000000) { // Contoh ukuran maksimum: 5MB
        header("Location: pages-pimpinan.php?pesan=file_too_large");
        exit;
    }

    $fotoPimpinan = basename($_FILES["fileToUpload"]["name"]);
    $target_file = $target_dir . $fotoPimpinan;
    $target_file_delete = $target_dir . $hiddenImage;

    // Hapus foto lama jika ada
    if (file_exists($target_file_delete)) {
        unlink($target_file_delete);
    }

    // Memeriksa apakah nama file sudah ada di direktori
    if (file_exists($target_file)) {
        header("Location: pages-pimpinan.php?pesan=file_duplicate");
        exit;
    }

    // Upload berkas dan simpan nama gambar di variabel seperti $fotoAlumni
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Update database
        $query = "UPDATE tb_pimpinan SET foto_pimpinan = '$fotoPimpinan', nama_pimpinan = '$namaPimpinan', jabatan_pimpinan = '$jabatanPimpinan', twitter_pimpinan = '$twitterPimpinan', facebook_pimpinan = '$facebookPimpinan', instagram_pimpinan = '$instagramPimpinan', linkedin_pimpinan = '$linkedinPimpinan' WHERE id_pimpinan = '$idPimpinan'";
        if (mysqli_query($conn, $query)) {
            header("Location: pages-pimpinan.php?pesan=update_success");
            exit;
        } else {
            // Jika terdapat kesalahan dalam pengolahan database
            header("Location: pages-pimpinan.php?pesan=database_error");
            exit;
        }
    } else {
        // Jika gagal mengunggah berkas
        header("Location: pages-pimpinan.php?pesan=update_fail");
        exit;
    }
} else {
    // Jika tidak ada berkas yang diunggah atau terdapat kesalahan
    $fotoPimpinan = $hiddenImage;

    // Update database
    $query = "UPDATE tb_pimpinan SET foto_pimpinan = '$fotoPimpinan', nama_pimpinan = '$namaPimpinan', jabatan_pimpinan = '$jabatanPimpinan', twitter_pimpinan = '$twitterPimpinan', facebook_pimpinan = '$facebookPimpinan', instagram_pimpinan = '$instagramPimpinan', linkedin_pimpinan = '$linkedinPimpinan' WHERE id_pimpinan = '$idPimpinan'";
    if (mysqli_query($conn, $query)) {
        header("Location: pages-pimpinan.php?pesan=update_success");
        exit;
    } else {
        // Jika terdapat kesalahan dalam pengolahan database
        header("Location: pages-pimpinan.php?pesan=database_error");
        exit;
    }
}
?>
