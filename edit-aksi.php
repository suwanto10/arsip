<?php 
include 'koneksi.php';
$x=$_POST['x'];
$id = $_POST['id'];
$Nomor_surat = $_POST['Nomor_surat'];
$Kategori = $_POST['Kategori'];
$Judul_surat = $_POST['Judul_surat'];
$Tanggal_arsip = date('Y-m-d');
$file_surat = $_FILES['file_surat']['name'];

$ekstension = array('pdf');
$pecah = explode(".", $file_surat);
$ekstensi = $pecah[1];

if (in_array($ekstensi, $ekstension)) {

mysqli_query($conn,  
	"UPDATE arsip_surat SET 
		Nomor_surat ='$Nomor_surat',
		Kategori = '$Kategori',
		Judul_surat = '$Judul_surat', 
		Tanggal_arsip = '$Tanggal_arsip',
		file_surat = '$file_surat'
	WHERE id = '$id'"
);

header("location:arsip.php?pesan=update");


// ambil data file
$namaFile = $_FILES['file_surat']['name'];
$namaSementara = $_FILES['file_surat']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "file/";

// pindahkan file
$d = 'file/'.$x;
unlink ("$d");
copy ($namaSementara, $dirUpload.$file_surat);

}else {
	header("location:arsip.php?pesan=bukanPDF");
}

?>
