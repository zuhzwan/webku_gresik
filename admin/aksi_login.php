<?php
include 'config/koneksi.php';

$username 	= $_POST['username'];
$password 	= $_POST['password'];
$pass		= md5($password);

// pastikan username dan password adalah berupa huruf atau angka.

$login=mysql_query("SELECT * FROM user WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu == 1){
  session_start();
  $_SESSION[id]     	  = $r[id];
  $_SESSION[namauser]     = $r[username];
  $_SESSION[passuser]     = $r[password];
  	header('location:index.php');
}
else{
  include "index.php";
  echo '<script language="javascript">document.location.href="index.php?status=Cek kembali username dan password anda";</script>';
}
?>