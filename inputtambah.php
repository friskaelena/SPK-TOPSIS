<?php
//koneksi
session_start();
include("koneksi.php");

$alternatif = $_POST['alter'];
$kriteria   = $_POST['krit'];
$tanggal    =  date("Y-m-d H:i:s");

$tambah = $koneksi->query('SELECT * FROM tab_topsis');

if ($row = $tambah->fetch_row()) {
  $insertQuery = '';
  $sql = $koneksi->query('SELECT * FROM tab_kriteria');
  while ($row = $sql->fetch_array()) {
    if (isset($_POST['nilai' . $row[0]])) {
      $insertQuery .= "INSERT INTO tab_topsis (id_alternatif,id_kriteria,nilai,tanggal) VALUES ('" . $alternatif . "','" . $row[0] . "','" . $_POST['nilai' . $row[0]] . "','" . $tanggal . "');";
    }
  }
  $insert = $koneksi->multi_query($insertQuery);
  if ($insert) {
    echo "<script>alert('Input Data Berhasil') </script>";
  }
  echo "<script>window.location.href = \"form.php\" </script>";
}
