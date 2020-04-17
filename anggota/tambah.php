<?php 
include '../koneksi.php';
include '../aset/header.php';
$query = mysqli_query($kon, "SELECT * FROM level");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
  <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<center><h3 class="card-header"><i class="fas fas fa-edit"></i>Tambah Data Anggota</h3></center>
 </div>
 <div class="card-body"></div>

 <form action="proses-tambah.php" method="post">

 <table class="table">
 <tr>
 	<td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
 	<td>Kelas</td>
    <td><input type="text" name="kelas"></td>
</tr>
<tr>
 	<td>Telp</td>
    <td><input type="text" name="telp"></td>
</tr>
<tr>
 	<td>Username</td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
 	<td>Password</td>
    <td><input type="password" name="password" ></td>
</tr>
<tr>
	<td>Level</td>
	<td>
		<select style="width: 200px" name="id_level">
			<option value="">-- Pilih Level --</option>

			<?php 

			while ($level = mysqli_fetch_assoc($query)):

			 ?>
			<option value="<?php echo $level['id_level']; ?>"><?php echo $level['level'];?></option>

			<?php
			 endwhile;
			?>
		</select>
	</td>

</tr>
<tr>
 	<td></td>
    <td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
 </body>
 </html>


 <?php 
include '../aset/footer.php';
  ?>