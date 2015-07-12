<?php include"menu.php";?>
<div class="halaman">
<div class="artikel"><h3>Tambah Berita</h3><br>
    
    <form action="content/berita/aksi_tambah.php" method="post" name="input" 
    enctype="multipart/form-data">
    <table class="tambah">
    <tr>
        <td>Judul Berita </td> 
        <td><input name="judul" size="30" type="text" /></td>
    </tr>
    <tr>
        <td>Kategori </td> 
        <td><select class="dropdown" name="kategori">
            <?php     
            $query = "SELECT id_kategori,
                        nm_kategori 
                        FROM kategori ORDER BY nm_kategori";
            $sql = mysql_query($query);
            while($hasil = mysql_fetch_array($sql)){
            echo "<option value='".$hasil[id_kategori]."'>$hasil[nm_kategori]                       </option>"; 
            }
            ?>
        </select>
        </td>
    </tr>
    <tr>
        <td>Isi Berita </td> 
        <td> <textarea  name="isi" ></textarea></td>
    </tr><tr></tr>
    <tr>
        <td colspan="4">Gambar</td>
        <td><input  class="gambar" type="file" name="gambar" required /></td> 
    </tr>
    <tr>
        <td></td>
        <td><input name="pengirim" size="30" type="hidden" value="Admin"/></td>
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