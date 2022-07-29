<?php
//untuk koneksi ke database


// mysqli_query($koneksi,"UPDATE tab_kriteria SET kriteria='$kriteria',bobot='$bobot' WHERE id_krit='$id_krit' ");

// echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
// echo "<script>window.location.href = \"kriteria.php\" </script>";

// $Ubah = "UPDATE tab_kriteria SET kriteria='$kriteria',bobot='$bobot' WHERE id_krit='$id_krit'";
session_start();
include ("koneksi.php");

//proses edit
$id_krit  = $_POST['id_krit'];
$nama_kriteria = $_POST['nama_kriteria'];
$keterangan = $_POST['keterangan'];
$bobot    = $_POST['bobot'];

$query = "UPDATE tab_kriteria SET nama_kriteria='$nama_kriteria',keterangan='$keterangan',bobot='$bobot' WHERE id_kriteria='$id_krit' ";
$result =  mysqli_query($koneksi,$query);
if ($result) {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_krit." Berhasil') </script>";
  echo "<script>window.location.href = \"kriteria.php\" </script>";
}else {
  // code...
  echo "<script>alert('Ubah Data Dengan ID = ".$id_krit."  gagal ') </script>";
  echo "<script>window.location.href = \"kriteria.php\" </script>";
}

?>
