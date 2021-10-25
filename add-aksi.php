<?php 
include 'koneksi.php';
$nomor_surat = $_POST['Nomor_surat'];
$kategori = $_POST['Kategori'];
$judul_surat = $_POST['Judul_surat'];
$tanggal_arsip = date('Y-m-d');
$file_surat = $_FILES['file_surat']['name'];

$ekstension = array('pdf','PDF');
$pecah = explode(".", $file_surat);
$ekstensi = $pecah[1];

if (in_array($ekstensi, $ekstension)) {

mysqli_query($conn, "INSERT INTO arsip_surat VALUES('','$nomor_surat','$kategori','$judul_surat', '$tanggal_arsip','$file_surat')");

header("location:arsip.php?pesan=input");

// ambil data file
// $namaFile = $_FILES['file_surat']['name'];
$namaSementara = $_FILES['file_surat']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "file/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$file_surat);

}else {
	header("location:arsip.php?pesan=bukanPDF");
}

?>