<?php
//koneksi
session_start();
include ("koneksi.php");

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
                    <li class="active">
                      <a href="alternatif.php" data-toggle="tab">Tabel Alternatif</a>
                    </li>
                    <li>
                      <a style="color: #13464b;" href="alternatiftambah.php" data-toggle="tab">Tambah Alternatif</a>
                    </li>
                </ul>

                <div class="panel-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="">
                        <!--tabel alternatif-->
                        <table class="table table-striped table-bordered table-hover">
                          <thead >
                            <tr>
                              <th>Kode Alternatif</th>
                              <th>NIK</th>
                              <th>Nama Alternatif</th>
                              <th>Bagian</th>
                              <th colspan="2">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no=1;
                            $sql = $koneksi->query('SELECT * FROM tab_alternatif Order by id_alternatif ');
                            while ($row = $sql->fetch_array()) {
                            ?>
                            <tr>
                              <td><?php echo $row[0] ?></td>
                              <td><?php echo $row[1] ?></td>
                              <td><?php echo $row[2] ?></td>
                              <td><?php echo $row[3] ?></td>
                              <td align="center"><a href="editalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-edit fa-fw" style="color: #13464b;"></i> </td>
                              <td align="center"><a href="hapusalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-trash fa-fw" style="color: red;"></i> </td>
                       
                            </tr>

                            <?php } ?>
                          </tbody>
                        </table>
                        <!--tabel alternatif-->
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

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
