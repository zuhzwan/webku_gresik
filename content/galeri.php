<div class="hal_artikel">
    <h2>Galeri</h2>
    <div class="kanan">
        <?php include'sidebar.php';?>
    </div>
    
    
     


    <div class="artikel">
           <?php
        $query="SELECT gambar
                FROM berita ORDER BY id_berita DESC";
        $sql = mysql_query($query);
            while ($hasil=mysql_fetch_array($sql)){
         
         $gambar= $hasil['gambar'];
    
        ?>
        <p>
		<a class="fancybox" href="#" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><?php echo "<img class='galeri' src='gambar/".$gambar."'/>"; ?></a>
	</p>
        
        <?php
        }
        ?> 
        
    </div>
    
        
</div>

