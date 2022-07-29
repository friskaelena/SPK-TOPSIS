<?php
//koneksi
session_start();
include ("koneksi.php");

$tampil = $koneksi->query("SELECT b.nama_alternatif,c.nama_kriteria,a.nilai,c.bobot
      FROM
        tab_topsis a
        JOIN
          tab_alternatif b USING(id_alternatif)
        JOIN
          tab_kriteria c USING(id_kriteria)");

$data      =array();
$kriterias =array();
$bobot     =array();
$nilai_kuadrat =array();

if ($tampil) {
  while($row=$tampil->fetch_object()){
    if(!isset($data[$row->nama_alternatif])){
      $data[$row->nama_alternatif]=array();
    }
    if(!isset($data[$row->nama_alternatif][$row->nama_kriteria])){
      $data[$row->nama_alternatif][$row->nama_kriteria]=array();
    }
    if(!isset($nilai_kuadrat[$row->nama_kriteria])){
      $nilai_kuadrat[$row->nama_kriteria]=0;
    }
    $bobot[$row->nama_kriteria]=$row->bobot;
    $data[$row->nama_alternatif][$row->nama_kriteria]=$row->nilai;
    $nilai_kuadrat[$row->nama_kriteria]+=pow($row->nilai,2);
    $kriterias[]=$row->nama_kriteria;
  }
}

$kriteria     =array_unique($kriterias);
$jml_kriteria =count($kriteria);
?>
<html>
<head>
  <title>SPK - Toko Yogi Banyumas</title>
  <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body style="padding: 50px;">

<div class="container">
  <br><br>
			<h1 align="Center">SPK - Toko Yogi Banyumas</h1>
            <h3 align="Center"  style="margin-bottom: 50px;">Laporan Perengkingan Karyawan</h3>
      <hr>
      <h3 align="left" > <?php
echo "Tanggal : " . date("Y-m-d h:i:sa") . "<br>";
?></h3>
      
      <hr>
      <br>
      <br>
      <div class="container" > <!--container-->
      <div class="row">
      	<div class="col-lg-10 col-lg-offset-2">
      	  <div class="panel panel-info">
      	    <div class="panel-heading">
              <h4>Nilai</h4>
      	    </div>
            <div class="panel-body">
            <div class="data-tables datatable-dark" style="margin: 10px;">
					
          <table id="export" class="table table-striped table-bordered table-hover" style="width:100%" >
          <thead>
            <tr>
              <th rowspan='3' style="text-align: center;">No</th>
              <th rowspan='3' style="text-align: center;">Nama</th>
              <th colspan='<?php echo $jml_kriteria;?>' style="text-align: center;">Kriteria</th>
            </tr>
            <tr>
              <?php
              foreach($kriteria as $k)
                echo "<th>$k</th>\n";
              ?>
            </tr>
            <tr>
              <?php
              for($n=1;$n<=$jml_kriteria;$n++)
                echo "<th style='text-align: center;'>K$n</th>";
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=0;
            foreach($data as $nama=>$krit){
              echo "<tr>
                <td>".(++$i)."</td>
                <td>$nama</td>";
              foreach($kriteria as $k){
                echo "<td align='center'>$krit[$k]</td>";
              }
              echo "</tr>\n";
            }
            ?>
          </tbody>
        </table>
    
  </div>
            </div>
      	  </div>
      	</div>
      </div>

      <!-- <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Rating Kinerja Ternormalisasi (r<sub>ij</sub>)
            </div>
            <div class="panel-body">
            <div class="data-tables datatable-dark">
					
          <table id="export7" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th rowspan='3'>No</th>
                    <th rowspan='3'>Alternatif</th>
                    <th rowspan='3'>Nama</th>
                    <th colspan='<?php echo $jml_kriteria;?>'>Kriteria</th>
                  </tr>
                  <tr>
                    <?php
                    foreach($kriteria as $k)
                      echo "<th>$k</th>\n";
                    ?>
                  </tr>
                  <tr>
                    <?php
                    for($n=1;$n<=$jml_kriteria;$n++)
                      echo "<th>K$n</th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  foreach($data as $nama=>$krit){
                    echo "<tr>
                      <td>".(++$i)."</td>
                      <th>A{$i}</th>
                      <td>{$nama}</td>";
                    foreach($kriteria as $k){
                      echo "<td align='center'>".round(($krit[$k]/sqrt($nilai_kuadrat[$k])),4)."</td>";
                    }
                    echo
                     "</tr>\n";
                  }
                  ?>
                </tbody>
              </table>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Rating Bobot Ternormalisasi(y<sub>ij</sub>)
            </div>
            <div class="panel-body">
            <div class="data-tables datatable-dark">
					
          <table id="export6" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th rowspan='3'>No</th>
                    <th rowspan='3'>Alternatif</th>
                    <th rowspan='3'>Nama</th>
                    <th colspan='<?php echo $jml_kriteria;?>'>Kriteria</th>
                  </tr>
                  <tr>
                    <?php
                    foreach($kriteria as $k)
                      echo "<th>$k</th>\n";
                    ?>
                  </tr>
                  <tr>
                    <?php
                    for($n=1;$n<=$jml_kriteria;$n++)
                      echo "<th>K$n</th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  $y=array();
                  foreach($data as $nama=>$krit){
                    echo "<tr>
                      <td>".(++$i)."</td>
                      <th>A{$i}</th>
                      <td>{$nama}</td>";
                    foreach($kriteria as $k){
                      $y[$k][$i-1]=round(($krit[$k]/sqrt($nilai_kuadrat[$k])),4)*$bobot[$k];
                      echo "<td align='center'>".$y[$k][$i-1]."</td>";
                    }
                    echo
                     "</tr>\n";
                  }
                  ?>
                </tbody>
              </table>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Solusi Ideal positif (A<sup>+</sup>)
            </div>
            <div class="panel-body">
              <div class="data-tables datatable-dark">
					
          <table id="export5" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th colspan='<?php echo $jml_kriteria;?>'>Kriteria</th>
                  </tr>
                  <tr>
                    <?php
                    foreach($kriteria as $k)
                      echo "<th>$k</th>\n";
                    ?>
                  </tr>
                  <tr>
                    <?php
                    for($n=1;$n<=$jml_kriteria;$n++)
                      echo "<th>y<sub>{$n}</sub><sup>+</sup></th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $yplus=array();
                    foreach($kriteria as $k){
                      $yplus[$k]=([$k]?max($y[$k]):min($y[$k]));
                      echo "<th>$yplus[$k]</th>";
                    }
                    ?>
                  </tr>
                </tbody>
              </table>
                  </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Solusi Ideal negatif (A<sup>-</sup>)
            </div>
            <div class="panel-body">
              <div class="data-tables datatable-dark">
					
          <table id="export4" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th colspan='<?php echo $jml_kriteria;?>'>Kriteria</th>
                  </tr>
                  <tr>
                    <?php
                    foreach($kriteria as $k)
                      echo "<th>{$k}</th>\n";
                    ?>
                  </tr>
                  <tr>
                    <?php
                    for($n=1;$n<=$jml_kriteria;$n++)
                      echo "<th>y<sub>{$n}</sub><sup>-</sup></th>";
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    $ymin=array();
                    foreach($kriteria as $k){
                      $ymin[$k]=[$k]?min($y[$k]):max($y[$k]);
                      echo "<th>{$ymin[$k]}</th>";
                    }

                    ?>
                  </tr>
                </tbody>
              </table>
                  </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Jarak positif (D<sub>i</sub><sup>+</sup>)
            </div>
            <div class="panel-body">
            <div class="data-tables datatable-dark">
					
          <table id="export3" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nama</th>
                    <th>D<suo>+</sup></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  $dplus=array();
                  foreach($data as $nama=>$krit){
                    echo "<tr>
                      <td>".(++$i)."</td>
                      <th>A{$i}</th>
                      <td>{$nama}</td>";
                    foreach($kriteria as $k){
                      if(!isset($dplus[$i-1])) $dplus[$i-1]=0;
                      $dplus[$i-1]+=pow($yplus[$k]-$y[$k][$i-1],2);
                    }
                    echo "<td>".round(sqrt($dplus[$i-1]),6)."</td>
                     </tr>\n";
                  }
                  ?>
                </tbody>
              </table>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="panel panel-info">
            <div class="panel-heading">
              Jarak negatif (D<sub>i</sub><sup>-</sup>)
            </div>
            <div class="panel-body">
            <div class="data-tables datatable-dark">
					
          <table id="export2" class="table table-striped table-bordered table-hover" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Alternatif</th>
                    <th>Nama</th>
                    <th>D<suo>-</sup></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i=0;
                  $dmin=array();
                  foreach($data as $nama=>$krit){
                    echo "<tr>
                      <td>".(++$i)."</td>
                      <th>A{$i}</th>
                      <td>{$nama}</td>";
                    foreach($kriteria as $k){
                      if(!isset($dmin[$i-1]))$dmin[$i-1]=0;
                      $dmin[$i-1]+=pow($ymin[$k]-$y[$k][$i-1],2);
                    }
                    echo "<td>".round(sqrt($dmin[$i-1]),6)."</td>
                     </tr>\n";
                  }
                  ?>
                </tbody>
              </table>
                </div>
            </div>
          </div>
        </div>
      </div> -->

      <div class="row">
        <div class="col-lg-10 col-lg-offset-2" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <H3>Rengking</H3>
            </div>
            <div class="data-tables datatable-dark">
					
          <table id="export1" class="table table-striped table-bordered table-hover"  >
          <thead>
            <tr>
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">Nama</th>
              <th style="text-align: center;">Rengking</th>
            </tr>
          </thead>
          <tbody>
          <?php
                  $i=0;
                  $V=array();
                  foreach($data as $nama=>$krit){
                    echo "<tr>
                      <td style='text-align: center;'>".(++$i)."</td>
                      <td  style='text-align: center;'>{$nama}</td>";
                    foreach($kriteria as $k){
                      $V[$i-1]=$dmin[$i-1]/($dmin[$i-1]+$dplus[$i-1]);
                    }
                    $tampil = round($V[$i-1],3,PHP_ROUND_HALF_UP);

                    echo "<td style='text-align: center;'>{$tampil}</td></tr>";
                  }
                  ?>
          </tbody>
        </table>
    
          </div>
          </div>
        </div>
      </div>

    
      <br>

      
    </div>

			
</div>
<script>
      window.print()
  </script>
<script>
$(document).ready(function() {
    $('#export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>


<script>
$(document).ready(function() {
    $('#export4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export5').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export6').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<script>
$(document).ready(function() {
    $('#export7').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

     <script src="tampilan/js/bootstrap.min.js"></script>
</body>

</html>