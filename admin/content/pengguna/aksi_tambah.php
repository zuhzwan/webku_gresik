<?php
//panggil file config.php untuk menghubung ke server
include('../../config/koneksi.php');
 
if (isset($_POST['input'])) {
    $id=$_POST[''];
    $nama  = $_POST['nama'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
	
	
 
//simpan data ke database
$query = mysql_query("insert into user values('$id', '$nama', '$username','$password')") or die(mysql_error());
 
if ($query) {
    header ('Location:../../index.php?page=pengguna');
 }
} else { echo "ERROR!!!!";}
?>