<?php
require_once "header.php";
$hakkimizda = $baglan->prepare("SELECT * from hakkimizda where hakkimizda_id=?");

$hakkimizda->execute(array(1));

$hakkimizdacek = $hakkimizda->fetch(PDO::FETCH_ASSOC);

?>


<section class="container py-1">
	<div class="text-center">
		<h2 class="text-uppercase mt-4 mb-5 fw-bold"></h2>
	</div>
	<h2 class="text-center my-4">Hakkımda</h2>

	<div class="row">
		<div class="col-lg-4 mt-5">
			<img class="img-fluid" src="images/profil.png" />
			<h3 class="text-center py-2">Davut Kesgin</h3>
			<i>
				<p class="text-center pt-0">-Full Stack Web Developer-</p>
			</i>
		</div>
		<div class="col-lg-7 offset-lg-1 mt-0 border border-3 rounded-2">

			<?php echo $hakkimizdacek['hakkimizda_aciklama'] ?>
			<hr />
			<h3 class="fw-bold fs-4">Yetenekler:</h3>
			<p class="mb-0">HTML - CSS - BOOTSTRAP 5 :</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-success" style="width: 99%">
					%99
				</div>
			</div>
			<p class="mb-0">JAVASCRİPT :</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-warning" style="width: 75%">
					75%
				</div>
			</div>
			<p class="mb-0">SQLİTE - MYSQL :</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-dark" style="width: 80%">
					80%
				</div>
			</div>
			<p class="mb-0">PHP WEB PROGRAMLAMA :</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-secondary" style="width: 85%">
					85%
				</div>
			</div>
			<p class="mb-0">C# OOP :</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-info" style="width: 80%">
					80%
				</div>
			</div>
			<p class="mb-0">PYTHON:</p>
			<div class="progress mb-2">
				<div class="progress-bar progress-bar-striped bg-danger" style="width: 90%">
					90%
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-title bg-dark ">
	<div class="overlay"></div>
	<div class="container ">
		<div class="row">
			<div class="col-md-12">
				<div class="text-white text-center ">
					<h2 class="fw-bolder text-uppercase text-white">hizmetlerim</h2>
					<p>İşletmenize uygun verebileceğim destekler...</p>
				</div>
				<div class="row pb-5">
					<div class="col-lg-6 col-md-8 mb-4">
						<img src="images/img4.png" class="img-fluid img-thumbnail" />
						<p class="text-white text-center pt-3 fs-2">
							━ Masaüstü Yazılımlar ━
						</p>
					</div>
					<div class="col-lg-6 col-md-8 mb-4">
						<img src="images/img5.jpg" class="img-fluid img-thumbnail" />
						<p class="text-white text-center pt-3 fs-2">━ Web Sitesi ━</p>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<div class="my-div">
						<button class="btn btn-primary" style="background-color: #E12454; color: white;">İletişime Geç</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>






<?php
require_once "footer.php";
?>