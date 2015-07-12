<?php include"menu.php";?>
<div class="halaman">
<div class="artikel">
    <h3>Berita</h3>
    <a class="selengkapnya" href="index.php?page=tambahberita"/>Tambah</a>

    <?php
   
		  $query = mysql_query("SELECT COUNT(*) jumData from berita");
		  $data = mysql_fetch_array($query);
		  $jumlahData = $data["jumData"];
		   
			$dataperPage = 5;
			  if(isset($_GET['hal']))
			  {
				$noPage= $_GET['hal'];
			  }
			 
			  else
			  {
				$noPage=1;
			  }
   
			$offset = ($noPage-1)*$dataperPage;
   
			?>
    
        <!-- menampilkan data dari database ke table -->
        <table id="table-a">
        <thead>
        <tr><th>No</th>
            <th>ID</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $query = mysql_query("SELECT A.id_berita,
                                        B.nm_kategori,
                                        A.judul,
                                        A.pengirim,
                                        A.tanggal 
                                        FROM berita A, 
                                        kategori B 
                                        WHERE A.id_kategori=B.id_kategori 
                                        ORDER BY A.id_berita DESC 
                                        limit  $offset, $dataperPage");
                while($hasil = mysql_fetch_array($query)) {
                $id_berita = $hasil['id_berita']; 
                $kategori = stripslashes($hasil['nm_kategori']);
                $judul = stripslashes($hasil['judul']);
                $pengirim = stripslashes($hasil['pengirim']);
                $tanggal = stripslashes($hasil['tanggal']);
        ?>
        <tr>
            <td><?php echo $offset=$offset+1; ?></td>
            <td><?php echo $id_berita; ?></td>
            <td><?php echo $kategori; ?></td>
            <td><?php echo $judul; ?></td>
            <td><?php echo $pengirim; ?></td>
            <td><?php echo $tanggal; ?></td>
            <td><a href="index.php?page=editberita&id=
                <?php echo $hasil['id_berita'];?>">Edit</a> | 
                <a href="content/berita/berita_hapus.php?id=
                         <?php echo $hasil['id_berita'];?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
    
    <!-- Mulai Pagging -->
    <div class="pagging"> 
        <ul>
        <?php
             $jumPage=ceil($jumlahData / $dataperPage);
             if($noPage > 1)
             {
              echo '<li>';
              echo"<a href='index.php?page=berita&hal=".($noPage-1)."'>&laquo;</a>";
              echo '</li>';
             }
             for($page = 1; $page <= $jumPage; $page++)
             {
              $showPage = 0;
              if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || 
                  ($page == 1) || ($page == $jumPage))
              {
               if (($showPage == 1) && ($page != 2)) {

                echo '<li class="disabled">';
                echo "<a href='#'>...</a>";
                echo '</li>';
               }
               if (($showPage != ($jumPage - 1)) && ($page == $jumPage)) {

                echo '<li class="disabled">';
                echo "<a href='#'>...</a>";
                echo '</li>';
               }
               if ($page == $noPage){

                echo '<li class="disabled">';
                 echo " <a href='#'><b>".$page."</b></a> ";
                echo '</li>';
               }
               else {

                echo '<li>';
                echo " <a href='index.php?page=berita&hal=".$page."'>".$page."</a> ";
                echo '</li>';
               }
               $showPage=$page;
              }
             }


             if ($noPage < $jumPage) {

              echo '<li>';
              echo "<a href='index.php?page=berita&hal=".($noPage+1)."'>&raquo;</a>";
              echo '</li>';
              }
            ?>
        </ul>
    </div>
</div>
</div>