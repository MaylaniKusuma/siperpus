<?php

include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res=mysqli_query($kon, $sql);

$pinjam=array();

while ($data=mysqli_fetch_assoc($res)) {
	$pinjam[]=$data;
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
    <center><h3 class="card-title"><i class="fas fa-book"></i>Data Buku</h3></center>
  </div>
  <div class="card-body">
  	<table class="table table-striped table-light">
  <thead>
    <tr>
      <th scope="col" width="50">#</th>
      <th scope="col" width="200">Judul</th>
      <th scope="col" width="200">Pengarang</th>
      <th scope="col" width="100">Stok</th>
      <th scope="col" width="100">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
    	$no = 1;
    	foreach($pinjam as $p) { ?>

    		<tr>
    			<th scope="row"><?= $no ?></th>
    			<td><?= $p['judul'] ?></td>
    			<td><?= $p['pengarang'] ?></td>
    			<td><?= $p['stok'] ?></td>
    			<td>
				<a href="detail.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-success">Detail</a>
				<a href="edit_b.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">Edit</a>
				<a href="hapus.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-warning">Hapus</a>
    			</td>
    		</tr>
    <?php 
	$no++;
}
    ?>
    </tbody>
</table>
<center><h2><i><a href="tambah.php" class="badge badge-info">Tambah Data</a></i></h2></center>
  </div>
</div>

<?php
include '../aset/footer.php';
?>