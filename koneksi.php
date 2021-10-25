<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname="db_arsip";

$koneksi = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($koneksi ,$dbname);

global $conn;
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>