<?php
//koneksi
session_start();
include ('koneksi.php');

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPK Toko Yogi</title>

    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

    <!--icon-->
    <link href="tampilan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php
        include "header1.php";
        ?>
<section class="ornament">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <style>
        body .ornament .ornament-left {
            z-index: 0 !important;
            position: absolute;
            margin-top: -52px;
        }
    </style>
</section>
    <section>
        <style>
            * {
                font-family: 'Inter', sans-serif !important;
            }

            body .font-red-hat-display {
                font-family: 'Red Hat Display', sans-serif !important;
            }

            body .cl-light-blue {
                color: #34b3ff;
            }

            body .contact-us {
                background: #FFFFFF;
                padding-bottom: 90px;
            }

            body .contact-us .headline {
                font-family: 'Red Hat Display', sans-serif;
                font-weight: 700;
                font-size: 60px;
                line-height: 140%;
                text-align: center;
                color: #16171C;
            }

            @media screen and (max-width: 768px) {
                body .contact-us .headline {
                    font-size: 40px;
                    line-height: 60px !important;
                }
            }

            body .contact-us .button {
                margin-top: 72px;
            }

            body .contact-us .btn-contact {
                padding: 16px 32px;
                background: #00B67A;
                border-radius: 12px;
                font-weight: 700;
                font-size: 20px;
                line-height: 24px;
                color: #FFFFFF;
            }

            @media screen and (max-width: 768px) {
                body .contact-us .btn-contact {
                    width: 100%;
                }
            }

            body .contact-us .btn-demo {
                padding: 16px 32px;
                border-radius: 12px;
                font-weight: 400;
                font-size: 20px;
                line-height: 24px;
                color: #16171C;
                border: 1px solid #8D8F98;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            @media screen and (max-width: 768px) {
                body .contact-us .btn-demo {
                    width: 100%;
                }
            }
        </style>
        <div class="container">
            <div class="row">
                    <div class="panel panel-default"  style="padding: 10px;">
                        <div class="panel-heading text-center">
                            <h3> Tabel Karyawan </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th><h4>No</h4></th>
                                        <th><h4>Nama Karyawan</h4></th>
                                        <th><h4>Bagian</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            $no=1;
                            $sql = $koneksi->query('SELECT * FROM tab_alternatif Order by id_alternatif ');
                            while ($row = $sql->fetch_array()) {
                            ?>
                                    <tr>
                                        <td><h4> <?php echo $row[0] ?></h4></td>
                                        <td><h4><?php echo $row[1] ?></h4></td>
                                        <td><h4><?php echo $row[2] ?></h4></td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
   
    </section>
    <?php
    include "footer.php";
    ?>
</body>

</html>
