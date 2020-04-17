<?php 
include 'koneksi.php';
$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($kon, $sql);
$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
	$pinjam[] = $data;
}

include '../aset/header.php';
?>

<div class="container">
<div class="row mt-4">
<div class="col-md">
	</div>
</div>
</div>

  <div class="card">
  <div class="card-header">
         <center><h3 class="card-title"><i class="fas fa-user"></i> Data Anggota </h3></center>

         </div>
                        <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
       <th scope="col">Aksi</th>
</tr>
  </thead>

  <?php 

    $no = 1;
    foreach ($pinjam as $p) { 
      ?>
    
   
    <tr>
    	<th scope="row"><?= $no ?></th>
    	<td><?= $p['nama']?></th>
    	<td><?= $p['kelas']?></th>
    	<td>
      <a href="detail.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
      <a href="edit.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
      <a href="hapus.php?id_anggota=<?php echo $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a> 
      </td>
      </tr>

    <?php  
    $no++;
    }
     ?>
  
 </table>
  </div>
  </div>
  <center>
  <table>
  <tr>
    <i><h3><a href="tambah.php" class="badge badge-info">+Tambah Anggota</h3></a></i>
  </tr>
</table>
</center>
<?php 
include  '../aset/footer.php'
;?>
