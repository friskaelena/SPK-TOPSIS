<?php
//untuk koneksi ke database
session_start();
include ("koneksi.php");

//proses edit
$id_poin = $_POST['id_poin'];
$poin    = $_POST['poin'];
$sub        = $_POST['sub'];

// $ubah = mysqli_query("UPDATE tab_poin SET poin ='".$poin."', poin ='".$poin."' WHERE id_poin='".$id_poin."' ");

// echo "<script>alert('Ubah Data Dengan ID = ".$id_poin." Berhasil') </script>";
// echo "<script>window.location.href = \"poin.php\" </script>";

$query = "UPDATE tab_poin SET poin='$poin',sub='$sub' WHERE id_poin='$id_poin' ";
$result =  mysqli_query($koneksi,$query);
if ($result) {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_poin." Berhasil') </script>";
  echo "<script>window.location.href = \"poin.php\" </script>";
}else {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_poin."  gagal ') </script>";
  echo "<script>window.location.href = \"poin.php\" </script>";
}


?>
