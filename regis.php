<!doctype html>
<html lang="en">
  <head>
  	<title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="tampilan/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Daftar Admin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Daftar</h3>
						<form action="#" class="login-form" action="" method="post">
		      		<div class="form-group">
                          <label for="">Username</label>
		      			<input type="text" class="form-control rounded-left" placeholder="Username" required name="username">
		      		</div>
	            <div class="form-group">
                    <label for="">Password</label>
	              <input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
	            </div>
	            <div class="form-group">
                    
					<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="login">Daftar</button>

	            </div>
				</form>
				  <?php
				  	if( isset($_POST['login']) ) {
						include "koneksi.php";
						$username = $_POST ['username'];
						$password = $_POST ['password'];
						
                        $sql    = "SELECT * FROM login";
                     $tambah = $koneksi->query($sql);

      if ($row = $tambah->fetch_row()) {
        $login = "INSERT INTO login VALUES ('".$username."','".$password."')";
        $buat  = $koneksi->query($login);

        echo "<script>alert('Tambah Admin Berhasil') </script>";
        echo "<script>window.location.href = \"index.php\" </script>";
      }
					  }
				  ?>
	        </div>

				</div>
			</div>
		</div>
	</section>


 <!-- footer-->
 <?php 
    include "footer.php"
    ?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

