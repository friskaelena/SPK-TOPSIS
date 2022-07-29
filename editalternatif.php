<?php
//koneksi
session_start();
include ("koneksi.php");

$id_alter   = $_GET['id_alternatif'];
$alternatif = $koneksi->query("SELECT * FROM tab_alternatif WHERE id_alternatif = '$id_alter'");

while ($row = $alternatif->fetch_row())
  {
    $nik  = $row[1];
    $nama  = $row[2];
    $bagian  = $row[3];
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

  </head>
  <body>

    <!--menu-->
    <!-- navbar -->
    <?php 
    include "header.php";
    ?>


    <div class="container">

      <div class="row">
        <!--form alternatif-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
              Edit Karyawan
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="edita.php" method="post">
                    <div class="form-group">
                    <label >Id Karyawan</label>
                      <input class="form-control" type="text" name="id_alternatif" value= <?php echo $_GET['id_alternatif']; ?> readonly>
                    </div>
                    <div class="form-group">
                    <label >NIK</label>
                      <input class="form-control" type="text" name="nik" value= <?php echo $nik; ?> >
                    </div>
                    <div class="form-group">
                    <label >Nama Karyawan</label>
                      <input class="form-control" type="text" name="nama_alternatif" value= <?php echo $nama; ?> >
                    </div>
                    <div class="form-group">
                    <label >Bagian</label>
                    <select class="form-control" name="bagian">
        <option>Pilih Bagian</option> 
        <option>PPIC</option>
        <option>PRODUCTION</option>
        <option>QUALITY</option>
        <option>HRD&GA</option>
        <option>Finance/Accounting</option>
      </select>
                    </div>
                    <div class="form-group">
                      <a href="alternatif.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form alternatif-->

      </div>
    </div>
 <!-- footer-->
 <?php 
    include "footer.php"
    ?>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
