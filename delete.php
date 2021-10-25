<?php 
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM arsip_surat WHERE id='$id'") or die(mysql_error());
$file_surat = $_POST['file_surat'];
unlink("file/".$file_surat);

header("location:arsip.php?pesan=hapus");
?>