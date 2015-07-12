<?php

    include('../../config/koneksi.php');
    mysql_query("delete from berita where id_berita='$_GET[id]'");
    header ('Location:../../index.php?page=berita');
?>