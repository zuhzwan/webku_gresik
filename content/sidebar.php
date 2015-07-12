<h3>PENCARIAN</h3>
        <form action="index.php?page=cari" method="post">
        <input type="text" name="search" placeholder="Pencarian..."></input>
        <input type="submit" value="Cari"></input><br>
        </form>
        <!-- berita terbaru -->
        <h3>BERITA TERBARU</h3>
        <ul>
            <?php
            $recent = mysql_query("SELECT id_berita,
                                judul,
                                gambar
                                FROM  berita 
                                ORDER BY id_berita DESC limit 5 ");
            while($post=mysql_fetch_array($recent)) {
            ?>
				<li class="recent">
                    <?php echo "<img  class='recent' src='gambar/".$post['gambar']."'/><br> "; ?>
                    <a href="index.php?page=detailberita&hal=<?php echo $post['id_berita'];?>"><?php echo stripslashes($post['judul']);?></a></li>
        <?php } ?>
        </ul><br><br>
        
        <!-- Kategori Berita-->
        <h3>KATEGORI</h3>
        <ul>
            <?php
            $kategori = mysql_query("SELECT id_kategori,
                                nm_kategori
                                FROM  kategori 
                                ORDER BY id_kategori ASC ");
            while($hkategori = mysql_fetch_array($kategori)) {
            ?>
            <li><a href=""><?php echo stripslashes($hkategori['nm_kategori']); ?></a></li>
            <?php } ?>
        </ul>