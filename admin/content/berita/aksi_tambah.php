<?php
//panggil file config.php untuk menghubung ke server
include('../../config/koneksi.php');
 
    if (isset($_POST['input'])) {
        $judul  = addslashes (strip_tags ($_POST['judul']));
        $kategori = $_POST['kategori'];
        $isi = mysql_real_escape_string($_POST['isi']);
        $fileName = $_FILES['gambar']['name'];
        $pengirim = addslashes (strip_tags ($_POST['pengirim']));

//simpan data ke database
$query = mysql_query("insert into berita values('', '$kategori', '$judul', '$isi', '$fileName' ,'$pengirim',now())") or die(mysql_error());
 move_uploaded_file($_FILES['gambar']['tmp_name'], "../../../gambar/".$_FILES['gambar']['name']);	
    if ($query) {
        header ('Location:../../index.php?page=berita');
     }
    } else { echo "ERROR!!!!";}
?>