<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Artikel</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor5/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts5/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor5/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor5/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor5/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css5/util.css">
	<link rel="stylesheet" type="text/css" href="css5/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('img/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="tambah.php" method="POST">
					<span class="contact2-form-title">
						Tambah Artikel
					</span>

					<div class="wrap-input2 validate-input" data-validate="judul is required">
						<input class="input2" type="text" name="judul">
						<span class="focus-input2" data-placeholder="judul"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid isi is required">
						<input class="input2" type="textarea" name="isi">
						<span class="focus-input2" data-placeholder="isi"></span>
					</div>                                      
					<input type="file" name="gambar" class="input2">

					<div class="wrap-input2 validate-input" data-validate="kategori is required">
						<input class="input2" type="text" name="kategori">
						<span class="focus-input2" data-placeholder="kategori"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="tanggal is required">
						<input class="input2" type="text" name="tanggal">
						<span class="focus-input2" data-placeholder="tanggal"></span>
					</div>
					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" type="submit" name="input">
								Tambah Artikel
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
