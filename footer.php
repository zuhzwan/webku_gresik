<div id="footer">
	<div class="barisbawah">
    <div class="kiri">
        <h3>Tentang</h3>
        <p>Media Gresik menyediakan informasi tentang industri dan UKM yang ada di Gresik</p>    
    </div>
    <div class="kanan">
       <h3>Kontak</h3>
        <p>Telphone : 081515176779</p>
        <p>Email : info@syaifulnazar.com</p>
        <p>Alamat : Sambogunung Dukun Gresik</p>    
    </div>
    <div class="tengah">
        <h3>Berita Terbaru</h3>
       <p><ul>
            <?php
            $recent = mysql_query("SELECT id_berita,
                                judul,
                                gambar
                                FROM  berita 
                                ORDER BY id_berita DESC limit 1 ");
            while($post=mysql_fetch_array($recent)) {
            ?>
				<li class="recent">
                    <?php echo "<img  class='recent' src='gambar/".$post['gambar']."'/><br> "; ?>
                    <a href="index.php?page=detailberita&hal=<?php echo $post['id_berita'];?>"><?php echo stripslashes($post['judul']);?></a></li>
        <?php } ?>
        </ul></p>
        
    </div>
</div>	
    
    <div class="bawah">
         <p>
            <a class="sosial" href="#" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../gresik/images/fb.png" alt="" /></a>
    
             <a class="sosial" href="#" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../gresik/images/tw.png" alt="" /></a>
             <a class="sosial" href="#" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="../gresik/images/gl.png" alt="" /></a>
        </p>
        <p>&copy; 2015 Media Gresik | Design By. Syaifulnazar </p>
       

		
	</p>
    </div>
</div>
	
