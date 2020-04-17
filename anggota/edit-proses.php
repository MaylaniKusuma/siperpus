<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
     $id_anggota     = $_POST['id_anggota'];
     $nama           = $_POST['nama'];
     $kelas          = $_POST['kelas'];
     $telp           = $_POST['telp'];
     $username       = $_POST['username'];

     $password        = $_POST['password'];
     $id_level        = $_POST['id_level'];


     $sql="UPDATE anggota SET nama='$nama', kelas='$kelas',
      telp='$telp', username='$username',
       password='$password', id_level= $id_level WHERE id_anggota='$id_anggota'";
     
     $res = mysqli_query($kon, $sql);
     $count = mysqli_affected_rows($kon);

     if ($res > 0) 
     {
     	echo
     	"
     	<script>
	     alert('Data Berhasil Diubah!');
	     document.location.href='index.php';
</script>";
     }
}

include '../aset/header.php';
?>