<?php
//koneksi
session_start();
include("koneksi.php");

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


    <!--tabel-tabel dan form-->
    <div class="container"> <!--container-->
      <div class="row"> <!--row-->
        <div class="col-lg-12">
          <div class="panel panel-primary">
            <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
            Pemberian  Nilai Matriks
            </div>
            <div class="panel-body" style="margin-left: 300px; margin-right: 300px;">
                      <div class="row">
                        <div class="col-lg-12">
                          <form class="form" action="tambahnilmat.php" method="post">
                            <div class="form-group">
                              <select class="form-control" name="alter">
                                <option>Nama Alternatif</option>
                                <?php
                                //ambil data dari database
                                $nama = $koneksi->query('SELECT * FROM tab_alternatif ORDER BY nama_alternatif');
                                while ($datalter = $nama->fetch_array())
                                {
                                  echo "<option value=\"$datalter[id_alternatif]\">$datalter[nama_alternatif]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="krit">
                                <option>Nama Kriteria</option>
                                <?php
                                //ambil data dari database
                                $krit = $koneksi->query('SELECT * FROM tab_kriteria ORDER BY nama_kriteria');
                                while ($datakrit = $krit->fetch_array())
                                {
                                  echo "<option value=\"$datakrit[id_kriteria]\">$datakrit[nama_kriteria]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <select class="form-control" name="nilai">
                                <option>Nilai</option>
                                <?php
                                //ambil data dari database
                                $poin = $koneksi->query('SELECT * FROM tab_poin ORDER BY poin');
                                while ($datapoin = $poin->fetch_array())
                                {
                                  echo "<option value=\"$datapoin[id_poin]\">$datapoin[poin]</option>\n";
                                }
                                ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-success">Proses</button>
                            </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div> <!--row-->
        </div> <!--container-->
      <!-- Form -->
       <!-- footer-->

    <?php 
    include "footer.php"
    ?>

        <!--plugin-->
        <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
