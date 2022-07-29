<?php
//koneksi
session_start();
include "koneksi.php";

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
    <link href="tampilan/css/slider.css" rel="stylesheet">
    <link href="tampilan/css/bootstrap.css" rel="stylesheet">
 



  </head>
  <body>
  <?php 
    include "header.php";
    ?>
  <center>
<div class="page-header" style="color: black; font-weight: 900;">
<h3>SISTEM PENUNJANG KEPUTUSAN (SPK) CV. FAJAR JAYA </h3>
</div>
</center>


    <!-- <div id="slider" style="margin:  0px 300px 0px 300px;">
      <figure>
        <img src="tampilan/img/toko.jpg">
        <img src="tampilan/img/toko.jpg">
        <img src="tampilan/img/toko.jpg">
        <img src="tampilan/img/toko.jpg">
        
      </figure> -->
     <div style="align-items: center;">
     <img class="" style="margin:  0px 10px 0px 100px; height: 400px; width: 400px; align-items: center;"
              src="tampilan/img/foto3.jpg"
              alt="" />
      <img class="" style="margin:  0px 10px 0px 10px; height: 400px; width: 400px; align-items: center;"
              src="tampilan/img/foto1.jpg"
              alt="" />
              <img class="" style="margin:  0px 100px 0px 0px; height: 400px; width: 400px; align-items: center;"
              src="tampilan/img/foto2.jpg"
              alt="" />


     </div>


              
    </div> <br><br>
    <!-- footer-->
    <?php 
    include "footer.php"
    ?>
  
    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
