<?php
include('../../config/koneksi.php');
if(isset($_POST['edit'])){
 $id_kategori = $_POST['id_kategori'];
 $nm_kategori = $_POST['nm_kategori'];
 
 
 //update kategori
 $query = "UPDATE kategori SET  nm_kategori='$nm_kategori' 
 WHERE id_kategori='$id_kategori'";
 $sql = mysql_query($query);

     if($sql){
       header ('Location:../../index.php?page=kategori');
     }else{
      echo "Error.... :'(";
     }
    }

?>