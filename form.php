<?php
//koneksi
session_start();
include("koneksi.php");
include "header.php";

$tampil = $koneksi->query("SELECT b.nama_alternatif,c.nama_kriteria,a.nilai,c.bobot
      FROM
        tab_topsis a
        JOIN
          tab_alternatif b USING(id_alternatif)
        JOIN
          tab_kriteria c USING(id_kriteria)");

$data      = array();
$kriterias = array();
$bobot     = array();
$nilai_kuadrat = array();

if ($tampil) {
  while ($row = $tampil->fetch_object()) {
    if (!isset($data[$row->nama_alternatif])) {
      $data[$row->nama_alternatif] = array();
    }
    if (!isset($data[$row->nama_alternatif][$row->nama_kriteria])) {
      $data[$row->nama_alternatif][$row->nama_kriteria] = array();
    }
    if (!isset($nilai_kuadrat[$row->nama_kriteria])) {
      $nilai_kuadrat[$row->nama_kriteria] = 0;
    }
    $bobot[$row->nama_kriteria] = $row->bobot;
    $data[$row->nama_alternatif][$row->nama_kriteria] = $row->nilai;
    $nilai_kuadrat[$row->nama_kriteria] += pow($row->nilai, 2);
    $kriterias[] = $row->nama_kriteria;
  }
}

$kriteria     = array_unique($kriterias);
$jml_kriteria = count($kriteria);
?>
<html>

<head>
</head>

<body>
<div class="panel panel-primary"  style="margin-left: 300px; margin-right: 300px;">
            <div class="panel-heading text-center" style="background-color: #13464b; color: white ;">
            Pemberian  Nilai Matriks
            </div>
            <div class="panel-body">
  <form action="inputtambah.php" method="POST" style="padding: 10px;">
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label class="form-label">Nama Alternatif</label>
      <select class="form-control" name="alter">
        <option>Nama Alternatif</option>
        <?php
        //ambil data dari database
        $nama = $koneksi->query('SELECT * FROM tab_alternatif ORDER BY nama_alternatif');
        while ($datalter = $nama->fetch_array()) {
          echo "<option value=\"$datalter[id_alternatif]\">$datalter[nama_alternatif]</option>\n";
        }
        ?>
      </select>
    </div>
    </div>
  </div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Nama Kriteria</th>
          <th>Poin</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sql = $koneksi->query('SELECT * FROM tab_kriteria');
        while ($row = $sql->fetch_array()) {
        ?>
          <tr>
            <td><?php echo $row[1] ?><input type="hidden" class="form-control" name="krit" placeholder="" value="<?php echo $row[0] ?>" readonly /></td>
           
            <td>
              <?php
                $data = $row[2]; 
              $loop = explode(',', $data);
              $loopdata = '<select class="form-control" name="nilai'.$row[0].'"><option>Nilai</option>';

              foreach ($loop as $key => $value) {
                $loopdata .= '<option value="' . $key+1 . '">'.$key+1 . $value . '</option>' . "\r\n";
              }
              $loopdata .= '</select>';
              
              echo $loopdata;
              ?>
             </td>

          </tr>

        <?php } ?>
      </tbody>
    </table>
    <button type="submit" class="btn btn-success">Proses</button>
  </form>
  </div>
</div>
</body>

</html>