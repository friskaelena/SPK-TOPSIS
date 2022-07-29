<?php
//koneksi
session_start();
include("koneksi.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$poin       = $_POST['nilai'];
$tanggal    =  date("Y-m-d H:i:s");

$tambah = $koneksi->query('SELECT * FROM tab_topsis');

if ($row = $tambah->fetch_row()) {

  $masuk = "INSERT INTO tab_topsis (id_alternatif,id_kriteria,nilai,tanggal) VALUES ('".$alternatif."','".$kriteria."','".$poin."','".$tanggal."')";
  $buat  = $koneksi->query($masuk);

  echo "<script>alert('Input Data Berhasil') </script>";
  echo "<script>window.location.href = \"nilmat.php\" </script>";
}

 ?>
