<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_alter   = $_POST['id_alternatif'];
$nama = $_POST['nama_alternatif'];
$bagian = $_POST['bagian'];

$query = "UPDATE tab_alternatif SET nama_alternatif='$nama', bagian='$bagian' WHERE id_alternatif='$id_alter' ";
$result =  mysqli_query($koneksi,$query);
if ($result) {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_alter." Berhasil') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
}else {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_alter."  gagal ') </script>";
  echo "<script>window.location.href = \"alternatif.php\" </script>";
}



?>
