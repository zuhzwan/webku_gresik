<?php include"menu.php";?>
<div class="halaman">
<div class="artikel"><h3>Edit Berita</h3><br>
    
    
    <?php
    $id_kategori = $_GET['id'];
    $query = "SELECT * 
                FROM kategori WHERE id_kategori='$id_kategori'";
    $sql = mysql_query($query);
    $hasil = mysql_fetch_array($sql);
    $id_kategori = $hasil['id_kategori']; 
    $nm_kategori = stripslashes($hasil['nm_kategori']);
    ?>

    <form action="content/kategori/aksi_edit.php" method="post" name="input">
    <table class="tambah">
    <tr>
        <td>Edit Kategori </td> 
        <td>
            <input name="id_kategori" size="30" type="hidden" value="<?php echo $id_kategori; ?>" />
            <input name="nm_kategori" size="30" type="text" value="<?php echo $nm_kategori; ?>" />              
        </td>
    </tr>
    
    <tr><tr></tr>
        <td>&nbsp;</td>
        <td>&nbsp;&nbsp;
            <input name="edit" type="submit" value="Submit" />
    </tr>
</table>
</form>
</div>
</div>