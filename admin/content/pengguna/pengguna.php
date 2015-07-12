<?php include"menu.php";?>
<div class="halaman">
<div class="artikel">
    <h3>Pengguna</h3>
    <a class="selengkapnya" href="index.php?page=tambahpengguna"/>Tambah</a>

    <?php
		  $query = mysql_query("SELECT COUNT(*) jumData from user");
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
    
        <table id="table-a">
        <thead>
        <tr><th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php 
            $query = mysql_query("SELECT id,
                                        nama,
                                        username,
                                        password
                                        FROM  user 
                                        ORDER BY id ASC 
                                        limit  $offset, $dataperPage");
                while($hasil = mysql_fetch_array($query)) {
                $id = $hasil['id']; 
                $nama = $hasil['nama'];
                $username = $hasil['username'];
        ?>
        <tr>
            <td><?php echo $offset=$offset+1; ?></td>
            <td><?php echo $id; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $username; ?></td>
            <td><a href="index.php?page=editpengguna&id=
                <?php echo $hasil['id'];?>">Edit</a> | 
                <a href="content/pengguna/pengguna_hapus.php?id=
                <?php echo $hasil['id'];?>">Hapus</a></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
    <!-- mulai pagging -->
        <div class="pagging"> 
        <ul>
        <?php
                 $jumPage=ceil($jumlahData / $dataperPage);
                 if($noPage > 1)
                 {
                  echo '<li>';
                  echo"<a href='index.php?page=kategori&hal="
                      .($noPage-1)."'>&laquo;</a>";
                  echo '</li>';
                 }
                 for($page = 1; $page <= $jumPage; $page++)
                 {
                  $showPage = 0;
                  if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) 
                      || ($page == 1) || ($page == $jumPage))
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
                    echo " <a href='index.php?page=kategori&hal=".$page."'>".$page."</a> ";
                    echo '</li>';
                   }
                   $showPage=$page;
                  }
                 }


                 if ($noPage < $jumPage) {

                  echo '<li>';
                  echo "<a href='index.php?page=katergori&hal=".($noPage+1)."'>&raquo;</a>";
                  echo '</li>';
                  }
                ?>
        </ul>
    </div>
</div>
</div>