<?php include 'config/koneksi.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
        <script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	</head>


<div id="wrapper">

    <div class="login">
    <h2>Login Admin</h2>
    <form method="post" action="aksi_login.php"  >
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form>
    </div>
    
    
</div>  
</html>