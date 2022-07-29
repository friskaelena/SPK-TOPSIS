<?php
//koneksi
session_start();
include ("koneksi.php");

//pemberian kode id secara otomatis
$carikode = mysqli_query($koneksi, "SELECT id_poin FROM tab_poin") or die(mysqli_connect_error());
$datakode = mysqli_fetch_array($carikode);
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

    <title>SPK TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.css" rel="stylesheet">
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
                    Poin
                </div>

                <ul class="nav nav-tabs">
                    <li>
                      <a style="color: #13464b;" href="poin.php" data-toggle="tab">Tabel Poin</a>
                    </li>
                    <li class="active">
                      <a href="pointambah.php" data-toggle="tab">Tambah Poin</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--form poin-->
                        <form class="form" action="pointambah.php" method="post">
                          <div class="form-group">
                          <label >Id Poin</label>
                            <input class="form-control" type="text" name="id_poin" value="<?php echo $kode_otomatis ?>" readonly>
                          </div>
                          <div class="form-group">
                          <label >Poin</label>
                            <input class="form-control" type="text" name="poin" placeholder="Poin" required>
                          </div>
                          <div class="form-group">
                          <label >Keterangan</label>
                            <input class="form-control" type="text" name="sub" placeholder="keterangan" required>
                          </div>
                          <div class="form-group">
                            <input class="btn btn-success" type="submit" name="simpan" value="Tambah">
                          </div>
                        </form>
                        <!--form poin-->
                      </div>
                    </div>
                </div>
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
      $id_poin = $_POST['id_poin'];
      $poin    = $_POST['poin'];
      $sub    = $_POST['sub'];


      $tambah = $koneksi->query('SELECT * FROM tab_poin');

      if ($row = $tambah->fetch_row()) {

        $masuk = "INSERT INTO tab_poin VALUES ('".$id_poin."','".$poin."','".$sub."')";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"poin.php\" </script>";
      }
    }

     ?>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
