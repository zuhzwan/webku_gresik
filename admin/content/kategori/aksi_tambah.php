<?php
//panggil file config.php untuk menghubung ke server
include('../../config/koneksi.php');
 
if (isset($_POST['input'])) {
    
    $kategori  = addslashes (strip_tags ($_POST['nmkategori']));
	
	
 
//simpan data ke database
$query = mysql_query("insert into kategori values('$idkategori', '$kategori')") or die(mysql_error());
 
if ($query) {
    header ('Location:../../index.php?page=kategori');
 }
} else { echo "ERROR!!!!";}
?>