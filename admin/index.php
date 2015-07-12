<?php include 'config/koneksi.php';
include 'config/setting.php';

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Administrator</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
        <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript">
            tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "white",

        // Example content CSS (should be your site CSS)
        content_css : "css/example.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "js/template_list.js",
        external_link_list_url : "js/link_list.js",
        external_image_list_url : "js/image_list.js",
        media_external_list_url : "js/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
        

        
	</head>


<div id="wrapper">
<?php include 'header.php';?>
	<div id="content"> 
        
        <?php
			switch($_REQUEST[page]){
		
			case "berita":
			include "content/berita/berita.php";
			break;
                
            case "tambahberita":
			include "content/berita/berita.tambah.php";
			break;
            
            case "editberita":
			include "content/berita/berita.edit.php";
			break;
            
            case "hapusberita":
			include "content/berita/berita_hapus.php";
			break;
            
            
            case "kategori":
			include "content/kategori/kategori.php";
			break;
            
            case "editkategori":
			include "content/kategori/kategori.edit.php";
			break;
                
            case "tambahkategori":
			include "content/kategori/kategori_tambah.php";
			break;
                
            case "pengguna":
			include "content/pengguna/pengguna.php";
			break;
                
            case "editpengguna":
			include "content/pengguna/kpengguna.edit.php";
			break;
                
            case "tambahpengguna":
			include "content/pengguna/pengguna_tambah.php";
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
