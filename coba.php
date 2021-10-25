<!-- 
include 'koneksi.php';
$id = $_POST['id'];
$Nomor_surat = $_POST['Nomor_surat'];
$Kategori = $_POST['Kategori'];
$Judul_surat = $_POST['Judul_surat'];


mysqli_query($conn,  
	"UPDATE arsip_surat SET 
		Nomor_surat ='$Nomor_surat',
		Kategori = '$Kategori',
		Judul_surat = '$Judul_surat', 

	WHERE id = '$id'"
);

header("location:arsip.php?pesan=input"); -->


<?php 

include 'koneksi.php';
$id = $_POST['id'];
$Nomor_surat = $_POST['Nomor_surat'];
$Kategori = $_POST['Kategori'];
$Judul_surat = $_POST['Judul_surat'];
$Tanggal_arsip = date('Y-m-d');


mysqli_query($conn,  
	"UPDATE arsip_surat SET 
		Nomor_surat ='$Nomor_surat',
		Kategori = '$Kategori',
		Judul_surat = '$Judul_surat',
		Tanggal_arsip = '$Tanggal_arsip'
		

	WHERE id = '$id'"
);

header("location:arsip.php?pesan=update");

?>
