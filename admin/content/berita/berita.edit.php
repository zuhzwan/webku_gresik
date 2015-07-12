<?php include"menu.php";?>
<div class="halaman">
<div class="artikel"><h3>Edit Berita</h3><br>
    
    <?php
    $id_berita = $_GET['id'];
    $query = "SELECT id_berita,
                    id_kategori,
                    judul, 
                    isi 
                    FROM berita WHERE id_berita='$id_berita'";
    $sql = mysql_query($query);
    $hasil = mysql_fetch_array($sql);
    $id_berita = $hasil['id_berita']; 
    $id_kategori = stripslashes($hasil['id_kategori']);
    $judul = stripslashes($hasil['judul']);
    $isi = stripslashes($hasil['isi']);
    ?>

    <form action="content/berita/aksi_edit.php" method="post" name="input">
    <table class="tambah">
    <tr>
        <td>Judul Berita </td> 
        <td>
            <input name="judul" size="30" type="text" 
            value="<?php echo $judul; ?>" />       
            <input name="idberita" size="30" type="hidden" 
            value="<?php echo $id_berita; ?>" />
        </td>
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
        <td> <textarea  name="isi" ><?php echo $isi; ?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input name="pengirim" size="30" type="hidden" value="Admin"/></td>
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