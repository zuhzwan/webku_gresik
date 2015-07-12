<?php  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dbnm = "db_mediagresik";  
  
$conn = mysql_connect($host, $user, $pass);  
if($conn){  
 $connect = mysql_select_db($dbnm);  
 if(!$connect){  
  die("Database tidak dapat dibuka");  
 }  
}else{  
 die("Server MySql tidak terhubung");   
}  
?>