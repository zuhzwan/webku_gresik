<div class="hal_artikel">
    <h2>Berita</h2>
    <div class="kanan">
        <?php include'sidebar.php';?>    
    </div>

        <!-- membaca berita dari database -->
        <?php
        $query=mysql_query("SELECT A.id_berita, 
                B.nm_kategori, 
                A.judul, 
                A.isi,
                A.gambar,
                A.pengirim, 
                A.tanggal 
                FROM berita A, kategori B 
                WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC LIMIT 0,5");
      
        while ($hasil=mysql_fetch_array($query)){
         $id_berita = $hasil['id_berita']; 
         $kategori = stripslashes($hasil['nm_kategori']);
         $judul = stripslashes($hasil['judul']);
         $isi = nl2br(stripslashes($hasil['isi']));
         $isi2=substr($isi,0,200);
         $gambar= $hasil['gambar'];
         $pengirim = stripslashes($hasil['pengirim']);
         $tanggal = stripslashes($hasil['tanggal']);
        ?>


    <div class="artikel">
        <?php echo "<img src='gambar/".$gambar."'/>"; ?>
        <h3><a href='index.php?page=detailberita&hal=<?php echo $id_berita;?>'><?php echo $judul; ?></a></h3>
        <h5>Oleh : <b><?php echo $pengirim; ?></b>
 			| <b><?php echo $tanggal; ?></b> | Kategori : <b>
			<?php echo $kategori; ?></b></h5>
        <p><?php echo $isi2; ?> ...</p>
        <div style="clear:both"></div>
        <a class="selengkapnya" href='index.php?page=detailberita&hal=<?php echo $hasil['id_berita'];?>'>Selengkapnya</a>
        <div style="border-bottom: 1px dashed #ddd;}"><br></div>
    </div>
        <?php
        }
        ?>
</div>

