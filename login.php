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
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center" style="background-color: #0cc4b6;">
		      		<span class="fa fa-user-o" ></span>
		      	</div>
		      	<h3 class="text-center mb-4">Silakan Masuk</h3>
						<form action="#" class="login-form" action="" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" required name="username">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" required name="password">
	            </div>
	            <div class="form-group">
					<button type="submit" class="form-control btn rounded submit px-3 text-white" name="login" style="background-color: #0cc4b6;" role="button">Login</button>

	            </div>
				</form>
				  <?php
				  	if( isset($_POST['login']) ) {
						include "koneksi.php";
						$username = $_POST ['username'];
						$password = $_POST ['password'];
						
						$cek_user = mysqli_query( $koneksi,"SELECT * FROM login WHERE username = '$username'");
						$row = mysqli_num_rows($cek_user);

						if ( $row === 1 ) {
								//jalankan prosedur seleksi password
								$fetch_pass = mysqli_fetch_assoc($cek_user);
								$cek_pass = $fetch_pass['password'];
								if($cek_pass <> $password ){
									echo"<script>alert('Password Salah');</script> ";
								}else{
									echo"<script>alert('Login Berhasil')</script> ";
									echo "<script>window.location.href = \"home.php\" </script>";
								}
							}else{
							echo"<script>alert('Username Salah Atau Belum Terdaftar');</script> ";
						}
					  }
				  ?>
	        </div>

				</div>
			</div>
		</div>
	</section>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

