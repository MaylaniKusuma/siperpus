<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_anggota = $_GET["id_anggota"];
$query = mysqli_query($kon,"SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota=$id_anggota");
$anggota = mysqli_fetch_assoc($query);
 ?>


 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 <center>
 <div class="card" style="width: 100%;">
 <div class="card-header" style="width: 100%;">
 	<h2 class="card-header"><i class="fas fas fa-edit"></i>Edit Anggota</h2>
 </div>
 <div class="card-body">
<form action="edit-proses.php" method="post">
<table class="table">
 <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota']; ?>">
 <tr>
 	<td>Nama</td>
    <td><input style="width:100%" type="text" name="nama" value="<?= $anggota['nama'];?>" required></td>
</tr>
<tr>
 	<td>Kelas</td>
    <td><input style="width:100%" type="text" name="kelas" value="<?= $anggota['kelas'];?>" required></td>
</tr>
<tr>
 	<td>Telepon</td>
    <td><input style="width:100%" type="text" name="telp" value="<?= $anggota['telp'];?>" required></td>
</tr>
<tr>
 	<td>Username</td>
   <td><input style="width:100%" type="text" name="username" value="<?= $anggota['username'];?>" required></td>
</tr>
<tr>
 	<td>Password</td>
   <td><input style="width:100%" type="text" name="password" value="<?= $anggota['password'];?>" required></td>
   </tr>
<tr>
	<td>Level</td>
	<td>
		<select style="width: 200px" name="id_level" required>
		
				<?php 
				$query = mysqli_query($kon, "SELECT * FROM anggota INNER JOIN level ON anggota.id_level = level.id_level WHERE id_anggota=$id_anggota");
				         while ($query_level = mysqli_fetch_assoc($query)){;
				          	?>
				         <option value="<?php echo $query_level['id_level']; ?>">
				             <?php echo $query_level['level']; ?>
				         </option>
                        <?php }; ?>
			
			</select>
			</td>
			</tr>
			</tr>
        <tr>
 	         <th></th>
             <th><button style="width:100px; height: 50px" type="submit" class="btn btn-primary" name="simpan">Edit</button>
             <button style="width:100px; height: 50px" type="submit" class="btn btn-primary" name="kembali">Kembali</button></th>
       </tr>
       
</table>
</form>
</div>
</div>
</div>
</div>
</div> 
</center>

 <?php 
include '../aset/footer.php';
  ?>