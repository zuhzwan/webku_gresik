<?php
if(isset($_GET['hal'])){
 $id_berita = $_GET['hal']; 
}else{
 die("Error. No Id Selected!"); 
}

$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.isi, A.gambar, A.pengirim, A.tanggal FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori AND A.id_berita='$id_berita'";
         $sql = mysql_query($query);
         $hasil = mysql_fetch_array($sql);
         $id_berita = $hasil['id_berita']; 
         $kategori = stripslashes($hasil['nm_kategori']);
         $judul1 = stripslashes($hasil['judul']);
         $gambar= $hasil['gambar'];
         $isi = nl2br(stripslashes($hasil['isi']));
         $pengirim = stripslashes($hasil['pengirim']);
         $tanggal = stripslashes($hasil['tanggal']);

    ?>

<div class="hal_artikel">
    <div class="kanan">
        <?php include'sidebar.php';?>
    </div>
    <div class="artikel">
        <h3 class="detail"><a href='index.php?page=detailberita&hal=<?php echo $id_berita;?>'>
            <?php echo $judul1; ?></a></h3>
        <h5 class="detail">Oleh : <b><?php echo $pengirim; ?></b>
 			| <b><?php echo $tanggal; ?></b> | Kategori : <b>
			<?php echo $kategori; ?></b></h5>
        <?php echo "<img class='detailgbr' src='gambar/".$gambar."'/>"; ?>
        <p class="detail"><?php echo $isi; ?></p>
        <div style="border-bottom: 1px dashed #ddd;}"><br></div><br>
        
        
        <?php
        if (isset($_POST['kirim'])) {
        $nama   = $_POST['nama'];
        $komentar  = $_POST['komentar'];
        $id_berita = $_POST['id'];
  
        $query_submit = mysql_query("INSERT INTO komentar (`id_komentar`,                `id_berita`, `nama`, `komentar`) VALUES ('id_komentar', '$id_berita',             '$nama', '$komentar') ");
        if ($query_submit) {
            echo '<div class="koment">berhasil mengirimkan komentar</div>';
        } else {
            echo '<div class="koment">gagal mengirimkan komentar</div>';
            }
        }
        $query_komentar = mysql_query("SELECT * FROM komentar WHERE                         `id_berita` = '$id_berita' ");

        ?>       
        
        <?php
        echo '<h3>Komentar</h3>';

        //menampilkan data komentar berdasarkan id-nya yang diambil dari GET
        
        //cek apakah sudah ada komentar atau tidak
        if (mysql_num_rows($query_komentar) == 0) {

        //kalau tidak ada maka akan me
        echo '<div class="koment"> Belum ada komentar </div>';
            } else {
        while ($data_komentar = mysql_fetch_array($query_komentar)) {
        echo '<div class="koment"><b>'.$data_komentar['nama'].'</b><br><p>'.$data_komentar['komentar'].'</p></div><br>';
        }
        }
        ?>


    
        <h3><br>Masukkan Komentar Disini :</h3>
        <form action="" method="post">
        <input hidden type="text" placeholder="idberita" name="id" value="<?php             echo $id_berita;?>"></input><br>
        <input type="text" placeholder="Nama Anda" name="nama"></input><br>
        <textarea  placeholder="Pesan" name="komentar"></textarea><br>
        <input type="submit" name="kirim" value="Kirim"></input><br><br>
         </form>
        
    <h3><br><br>ARTIKEL LAINYA</h3>
        <ul>
            <?php
            $recent = mysql_query("SELECT id_berita,
                                judul
                                FROM  berita 
                                ORDER BY id_berita  limit 3");
            while($post=mysql_fetch_array($recent)) {
            ?>
				<li><a class="lainya" href="index.php?page=detailberita&hal=<?php echo $post['id_berita'];?>"><?php echo stripslashes($post['judul']);?></a></li>
        <?php } ?>
        </ul><br>
        <div style="border-bottom: 1px dashed #ddd;}">  </div>


</div>
</div>

