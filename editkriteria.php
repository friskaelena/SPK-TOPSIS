<?php
//koneksi
session_start();
include ("koneksi.php");

//perintah untuk menampilkan hasil edit
$id_krit  = $_GET['id_kriteria'];
$kriteria = $koneksi->query("SELECT * FROM tab_kriteria WHERE id_kriteria = '$id_krit' ");

while ($row = $kriteria->fetch_row())
  {
    $nama_kriteria  = $row[1];
    $keterangan = $row[2];
    $bobot = $row[3];
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
    <!-- navbar -->
    <?php 
    include "header.php";
    ?>

    <div class="container">

      <div class="row">
        <!--form kriteria-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
              Edit Kriteria
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editk.php" method="post">
                    <div class="form-group">
                    <label >Id Kriteria</label>
                      <input class="form-control" type="text" name="id_krit" value= <?php echo $_GET['id_kriteria']; ?> readonly>
                    </div>
                    <div class="form-group">
                    <label >Nama Kriteria</label>
                      <input class="form-control" type="text" name="nama_kriteria" value= <?php echo $nama_kriteria; ?> />
                    </div>
                    <div class="form-group">
                    <label >Keterangan Poin</label>
                      <input class="form-control" type="text" name="keterangan" value= <?php echo $keterangan;?> />
                    </div>
                    <div class="form-group">
                    <label >Bobot</label>
                      <input class="form-control" type="text" name="bobot" value= <?php echo $bobot; ?> />
                    </div>
                    <div class="form-group">
                      <a href="kriteria.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form kriteria-->

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
