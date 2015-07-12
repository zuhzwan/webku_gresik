<?php
include('../../config/koneksi.php');
    if(isset($_POST['edit'])){
     $id_berita = $_POST['idberita'];
     $judul = addslashes(strip_tags($_POST['judul']));
     $kategori = $_POST['kategori'];
     $isi_berita = addslashes(strip_tags($_POST['isi']));
     $pengirim = addslashes(strip_tags($_POST['pengirim']));

 //update berita
 $query = "UPDATE berita SET id_kategori='$kategori', judul='$judul', 
 isi='$isi_berita', pengirim='$pengirim' WHERE id_berita='$id_berita' ";
 $sql = mysql_query($query);

     if($sql){
       header ('Location:../../index.php?page=berita');
     }else{
      echo "Error.... :'(";
     }
}
?>