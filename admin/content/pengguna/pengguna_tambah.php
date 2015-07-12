<?php include"menu.php";?>
<div class="halaman">
<div class="artikel"><h3>Tambah Pengguna</h3><br>
    
    <form action="content/pengguna/aksi_tambah.php" method="post" name="input">
    <table class="tambah">
   
    <tr>
        <td>Nama Lengkap</td> 
        <td><input name="nama" size="30" type="text" /></td>
    </tr>
    <tr>
        <td>Username </td> 
        <td><input name="username" size="30" type="text" /></td>
    </tr>
    <tr>
        <td>Password </td> 
        <td><input name="npassword" size="30" type="password" /></td>
    </tr>
        
    <tr><tr></tr>
        <td>&nbsp;</td>
        <td>&nbsp;&nbsp;
            <input name="input" type="submit" value="Submit" />
    </tr>
</table>
</form>
</div>
</div>