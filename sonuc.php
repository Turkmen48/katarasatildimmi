<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sonuç</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
  Uyarı
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Uyarı</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Bu site tamamen mizah amaçlıdır. Gerçek kişi ve kurumlar ile alakası yoktur. İzahı olmayan şeylerin mizahı olur.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tamam</button>

      </div>
    </div>
  </div>
</div>
  </form>
</nav>
	
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100">
				<p class="font-weight-bold">Adı:</p>
				<p><?php echo $_POST["name"]; ?></p>
				<br>
				<p class="font-weight-bold">Soyadı:</p>
				<p><?php echo $_POST["surname"]; ?></p>
				<br><br>
				<p>Tebrikler, 100 QAR (katar riyali) karşılığında Katar'lı efendilerimize satılmış bulunmaktasınız. Ama üzülmeyin sizden elde ettiğimiz geliri Anal İstanbul, Ankapark, 89798798798. Cumhurbaşkanlığı Külliyesi gibi projelerde kullanacağımızı belirtiriz. <br><p class="font-weight-bold">Not:</p> <p>Katar'lı efendiniz sizi azad ederse tekrar Türj vatandaşlığına geçebilirsiniz. Sevgilerimizle, Cumhurbaşkanlığı Katar'a Dönüşüm ve Halka Girişim Ofisi</p>
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
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.0
		})
	</script>
<!--===============================================================================================-->


</body>
</html>