<?php
	include "header1.php";
?>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-md-left">
            <h1 class="title-text">
              Selamat Datang di<br class="d-lg-block d-none" />
              <span style="color: #0cc4b6"><b> Cv.Fajar Jaya</b></span><br class="d-lg-block d-none" />
            </h1>
            <p class="text-caption">
              Secara umum kami bekerja dalam proses pengadaan
barang lebih khusus terkait pengadaan Seragam
Kedinasan dan pakaian formal lainnya
              Kami adalah perusahaan yang bergerak<br class="d-lg-block d-none" />
dibidang garmen yang
terintegrasi secara profesional dengan
sentuhan kerja keras, passion dan ketekunan.
            </p>
          </div>

          <!-- Right Column -->
          <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0" style="padding-top: 30%;
          ">
            <img class="position-absolute justify-content-center d-lg-block d-none hero-right " style="margin-bottom: 100px; margin-right: 0.75rem; height: 400px; width: 400px; align-items: center;"
              src="tampilan/img/logo.svg"
              alt="" />
          
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


 <!-- footer-->

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<!-- <section class="h-100 w-100" style="box-sizing: border-box; background-color: #000000; ">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-3 .btn:focus,
      .content-2-3 .btn:active {
        outline: none !important;
      }

      .content-2-3 .title-text {
        padding-top: 5rem;
        margin-bottom: 3rem;
      }

      .content-2-3 .text-title {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .text-caption {
        color: #707092;
        font-weight: 300;
      }

      .content-2-3 .column {
        padding: 2rem 2.25rem;
      }

      .content-2-3 .icon {
        margin-bottom: 1.5rem;
      }

      .content-2-3 .icon-title {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .icon-caption {
        font: 400 1rem/1.625 Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #707092;
      }

      .content-2-3 .card {
        padding: 1.75rem;
        background-color: #292952;
        border-radius: 0.75rem;
        border: 1px solid #4c4c6d;
      }

      .content-2-3 .card-block {
        padding: 1rem 1rem 5rem;
      }

      .content-2-3 .card-title {
        font: 600 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
      }

      .content-2-3 .card-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        color: #707092;
        letter-spacing: 0.025em;
        margin-bottom: 0;
      }

      .content-2-3 .btn-card {
        font: 700 1rem/1.5rem Poppins, sans-serif;
        background-color: #4E91F9;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
        border: none;
      }

      .content-2-3 .btn-card:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .content-2-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        color: #57578e;
        border: 1px solid #57578e;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }

      .content-2-3 .btn-outline:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
      }

      .content-2-3 .card-text {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      .content-2-3 .grid-padding {
        padding: 0rem 1rem 3rem;
      }

      @media (min-width: 576px) {
        .content-2-3 .grid-padding {
          padding: 0rem 2rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 2rem 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-2-3 .grid-padding {
          padding: 0rem 4rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 4rem 5rem;
        }
      }

      @media (min-width: 992px) {
        .content-2-3 .grid-padding {
          padding: 1rem 6rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-3 .column {
          padding: 0rem 2.25rem;
        }
      }

      @media (min-width: 1200px) {
        .content-2-3 .grid-padding {
          padding: 1rem 10rem 3rem;
        }

        .content-2-3 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-3 .card-btn-space {
          margin-top: 15px;
          margin-bottom: 15px;
        }

        .content-2-3 .btn-outline,
        .content-2-3 .btn-card {
          width: 95%;
          float: right;
        }
      }

      @media (max-width: 980px) {
        .content-2-3 .card-btn-space {
          width: 100%;
        }
      }
    </style>
    <div class="content-2-3 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title text-white">Mengapa Memilih Kami?</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          Kami adalah perusahaan yang bergerak
dibidang industri tekstil dan garmen yang
terintegrasi secara profesional dengan
sentuhan kerja keras, passion dan ketekunan.
Berawal dari sebuah usaha tailor pada tahun
1958, kini Fajar Jaya bertransformasi menjadi
sebuah industri tekstil dan garmen modern,
yang memiliki lebih dari 200 mesin dan
tenaga kerja ahli yang siap menghasilkan
produk-produk berkualitas.
        </p>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Kualitas Produk Terjamin</h3>
            <p class="text-caption" style="margin-left: -1rem; margin-right: -1rem">
              Dengan kapasitas produksi yang besar <br> dan adanya quality control yang Ketat</p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Berpengalaman lebih dari 1 dekade</h3>
            <p class="text-caption" style="margin-left: -1rem; margin-right: -1rem">
              Dengan pengalaman yang ada kami tetap<br> menjaga hasil agar tetap rapi </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png"
                alt="" />
            </div>
            <h3 class="icon-title text-white">Dengan costum desain sesuai dengan keinginan pelanggan </h3>
            <p class="text-caption" style="margin-left: -1rem; margin-right: -1rem">
              Kami juga menyediakan garansi untuk semua produk yang kami produksi <br> </p>
          </div>
        </div>
      </div>

     
    </div>
 


<footer class="page-footer font-small blue">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body footer {
            background: #ffffff;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer {
            background: #b1b1b1;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer .logo {
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 700;
            font-size: 26px;
            line-height: 38px;
            color: #FAFAFD;
        }

        body footer .social-media {
            margin-top: 55px;
        }

        body footer .copyright {
            font-family: 'Red Hat Display', sans-serif !important;
            font-weight: 400;
            font-size: 16px;
            line-height: 135%;
            color: #FAFAFD;
            margin-top: 20px;
        }

        body footer .nav-footer p {
            font-weight: 700 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer .nav-footer a {
            font-weight: 400 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer li {
            margin-bottom: 16px;
        }
    </style>
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-7 mt-md-0 mt-2 address">
                <div class="logo font-red-hat-display">
                    Cv. Fajar Jaya 
                </div>
				<p>Jl. KS tubun no.40 Purwokerto</p>
                <div class="social-media">
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_linkedin.svg"
                            alt="linkedin" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_facebook.svg"
                            alt="facebook" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_twitter.svg"
                            alt="twitter" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_instagram.svg"
                            alt="twitch" class="img-fluid mr-4">
                    </a>
                </div>
                <div class="copyright font-red-hat-display">
                    2022 All rights reserved.
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
        </div>
    </div>
</footer>  -->