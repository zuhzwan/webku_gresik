<?php include 'config/koneksi.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title>Media Gresik</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
        
        
        
        
	</head>


<div id="wrapper">
<?php include 'header.php';?>

	<div id="content"> 
        
        <?php
			switch($_REQUEST[page]){
		
			case "berita":
			include "content/berita.php";
			break;
            
            case "detailberita":
			include "content/detailberita.php";
			break;
                
            case "tentangkami":
			include "content/tentang.php";
			break;
            
            case "galeri":
			include "content/galeri.php";
			break;
                
            case "kontakkami":
			include "content/kontak.php";
			break;
            
            case "cari":
			include "content/cari.php";
			break;    
            
			default:
			include('home.php');
			break;
		
			}
			?>
        
	</div>
	
<?php include 'footer.php';?>
</div>
</html>