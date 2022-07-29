<?php
//koneksi
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = $koneksi->query("SELECT id_kriteria FROM tab_kriteria") or die(mysqli_connect_error());
$datakode = $carikode->fetch_array();
$jumlah_data = mysqli_num_rows($carikode);

if ($datakode) {
  $nilaikode = substr($jumlah_data, 1);
  $kode = (int) $nilaikode;
  $kode = $jumlah_data + 1;
  $kode_otomatis = str_pad($kode, 0, STR_PAD_LEFT);
} else {
  $kode_otomatis = "1";
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cv Fajar Jaya</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>
  <body>

   <!-- navbar -->
   <?php 
    include "header.php";
    ?>


    <div class="container">

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
                    Kriteria
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a style="color: #13464b;" href="kriteria.php" data-toggle="tab">Tabel Kriteria</a>
                    </li>
                    <li class="active">
                      <a href="kriteriatambah.php" data-toggle="tab">Tambah Kriteria</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <!--form kriteria-->
                      <form class="form" action="kriteriatambah.php" method="post">
                        <div class="form-group">
                        <label >Id Kriteria</label>
                          <input class="form-control" type="text" name="id_krit" value="<?php echo $kode_otomatis; ?>" readonly>
                        </div>
                        <div class="form-group">
                        <label >Nama Kriteria</label>
                          <input class="form-control" type="text" name="nm_krit" placeholder="Nama Kriteria" required>
                        </div>
                        <div class="form-group">
                        <label >Keterangan Poin</label>
                          <input class="form-control" type="text" name="keterangan" placeholder="Keterangan Poin" required>
                        </div>
                        <div class="form-group">
                        <label >Bobot</label>
                          <input class="form-control" type="text" name="bobot" placeholder="Bobot" required>
                        </div>
                        <div class="form-group">
                          <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                        </div>
                      </form>
                      <!--form kriteria-->
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <!--footer-->
    <!-- footer-->
    <?php 
    include "footer.php"
    ?>

    <?php

    if (isset($_POST['simpan'])) {
      $id_krit  = $_POST['id_krit'];
      $kriteria = $_POST['nm_krit'];
      $keterangan = $_POST['keterangan'];

      $bobot    = $_POST['bobot'];

      $sql    = "SELECT * FROM tab_kriteria";
      $tambah = $koneksi->query($sql);

      if ($row = $tambah->fetch_row()) {

        $masuk = "INSERT INTO tab_kriteria VALUES ('".$id_krit."','".$kriteria."','".$keterangan."','".$bobot."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"kriteria.php\" </script>";
      }
    }

     ?>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
