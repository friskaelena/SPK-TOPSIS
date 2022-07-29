<?php
//koneksi
session_start();
include ("koneksi.php");

//perintah untuk menampilkan hasil edit
$id_poin = $_GET['id_poin'];
$query   = $koneksi->query("SELECT * FROM tab_poin WHERE id_poin = '$id_poin'");

while ($row = $query->fetch_array())
  {
    $nama  = $row[1];
    $sub  = $row[2];
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
        <!--form poin-->
        <div class="col-lg-6 col-lg-offset-3">
          <div class="panel panel-primary">
            <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
              Edit Poin
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form class="form" action="editp.php" method="post">
                    <div class="form-group">
                    <label >Id Poin</label>
                      <input class="form-control" type="text" name="id_poin" value= <?php echo $_GET['id_poin']; ?> readonly>
                    </div>
                    <div class="form-group">
                    <label >Nama</label>
                      <input class="form-control" type="text" name="poin" value= <?php echo $nama; ?> >
                    </div>
                    <div class="form-group">
                    <label >Keterangan</label>
                      <input class="form-control" type="text" name="sub" value= <?php echo $sub;?> >
                    </div>
                    <div class="form-group">
                      <a href="poin.php"><button type="button" class="btn btn-danger">Batal</button></a>
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--form poin-->

      </div>
    </div>
 <!-- footer-->
 <?php 
    include "footer.php"
    ?>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
