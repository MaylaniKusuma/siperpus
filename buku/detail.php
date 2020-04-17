<?php 
include '../aset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku inner join kategori on buku.id_kategori = kategori.id_kategori where id_buku = $id_buku";
$res = mysqli_query($kon,$sql);
$detail = mysqli_fetch_assoc($res);

?>

<div class="countainer">
	<div class="row mt-4">
		<div class="col-md">
		<center>
			<h2>Detail Buku</h2>
			<hr class="bg-light">
			<table><tr><th>
				<table class="table table-bordered">
					<tr>
						<td><strong>Cover</strong></td>
						<td><?php echo "<img src='$detail[cover]' ?>";?></td>
					</tr>
					<tr>
						<td width="100"><strong>Judul</strong></td>
						<td width="500"><?= $detail['judul'] ?></td>
					</tr>
					<tr>
						<td width="100"><strong>Penerbit</strong></td>
						<td width="500"><?= $detail['penerbit'] ?></td>
					</tr>
					<tr>
						<td width="100"><strong>Pengarang</strong></td>
						<td width="500"><?= $detail['pengarang'] ?></td>
					</tr>
					<tr>
						<td width="100"><strong>Ringkasan</strong></td>
						<td width="500"><?= $detail['ringkasan'] ?></td>
					</tr>
					<tr>
						<td width="100"><strong>Stok</strong></td>
						<td width="500"><?= $detail['stok'] ?></td>
					</tr>
					<tr>
						<td width="100"><strong>Kategori</strong></td>
						<td width="500"><?= $detail['kategori'] ?></td>
					</tr>
					
				</table>
				</th></tr></table>
				<td><center>
				<a href="edit_b.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-danger">Edit</a>
				<a href="hapus.php?id_buku=<?php echo $p['id_buku']; ?>" class="badge badge-warning">Hapus</a>
    			</center></td>
		</div>
	</div>
</div>

<?php
include '../aset/footer.php';
?>