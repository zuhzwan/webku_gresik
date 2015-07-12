<?php

include('../../config/koneksi.php');
mysql_query("delete from kategori where id_kategori='$_GET[id]'");

   header ('Location:../../index.php?page=kategori');
?>