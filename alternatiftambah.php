<?php
//koneksi
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = $koneksi->query("SELECT id_alternatif FROM tab_alternatif") or die (mysqli_connect_error());
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
                    Alternatif
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a style="color: #13464b;" href="alternatif.php" data-toggle="tab">Tabel Alternatif</a>
                    </li>
                    <li class="active">
                      <a href="alternatiftambah.php" data-toggle="tab">Tambah Alternatif</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--form alternatif-->
                        <form class="form" action="alternatiftambah.php" method="post">
                          <div class="form-group">
                            <label >Kode Alternatif</label>
                            <input class="form-control" type="text" name="id_alter" value="<?php echo $kode_otomatis; ?>" readonly>
                          </div>
                          <div class="form-group">
                          <label >NIK</label>
                            <input class="form-control" type="text" name="nik" placeholder="Nik" required>
                          </div>
                          <div class="form-group">
                          <label >Nama Alternatif</label>
                            <input class="form-control" type="text" name="nm_alter" placeholder="Nama Alternatif" required>
                          </div>
                          
                          <div class="form-group">
                    <label >Bagian</label>
                    <select class="form-control" name="bg_alter">
        <option>Pilih Bagian</option> 
        <option>PPIC</option>
        <option>PRODUCTION</option>
        <option>QUALITY</option>
        <option>HRD&GA</option>
        <option>Finance/Accounting</option>
      </select>
                    </div>
                          <div class="form-group">
                            <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                          </div>
                        </form>
                        <!--form alternatif-->
                      </div>
                    </div>
                </div>
                <!--panel body-->
            </div>
          </div>
        </div>

    </div>

 <!-- footer-->
 <?php 
    include "footer.php"
    ?>

    <?php

    if (isset($_POST['simpan'])) {
      $id_alter   = $_POST['id_alter'];
      $nik  = $_POST['nik'];
      $alternatif = $_POST['nm_alter'];
      $bg_alter = $_POST['bg_alter'];

      $sql    = "SELECT * FROM tab_alternatif";
      $tambah = $koneksi->query($sql);

      if ($row = $tambah->fetch_row()) {
        $masuk = "INSERT INTO tab_alternatif VALUES ('".$id_alter."','".$nik."','".$alternatif."','".$bg_alter."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"alternatif.php\" </script>";
      }
    }

     ?>


    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
