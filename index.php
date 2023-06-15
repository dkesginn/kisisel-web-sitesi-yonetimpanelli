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



<section>
	<div class="container">
		<div class="cta position-relative ">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-computer"></i>
						<span class="h3">60</span>+
						<p>Proje</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-web"></i>
						<span class="h3">20</span>+
						<p>Web Tasarım</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">14</span>+
						<p>Sertfika</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-people"></i>
						<span class="h3">20</span>+
						<p>Müşteriler</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section testimonial-2 gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2>Projelerimize ilişkin aldığımız olumlu geri bildirimler</h2>
					<div class="divider mx-auto my-4"></div>
					<p>
						Olumlu geri bildirimleri görmek bizi mutlu ediyor ve projemizin değerini artırıyor. Siz de bu deneyimi yaşamak ve projemize katkıda bulunmak isterseniz, bizimle iletişime geçmekten çekinmeyin.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 testimonial-wrap-2">
				<div class="testimonial-block style-2  gray-bg">
					<i class="icofont-quote-right"></i>

					<div class="testimonial-thumb">
						<img src="images/akin.jpeg" alt="" class="img-fluid">
					</div>

					<div class="client-info ">
						<h4>Profesyönel Tasarım!</h4>
						<span>Akın Kurthan Çandaroğlu</span>
						<p>
							Web site tasarımı oldukça hızlı ve beklediğimden de kullanışlıydı. Sözünde duran ve hızlı teslim eden bir yazılımcı.
							Başka projelerde görüşmek üzere...

						</p>
					</div>
				</div>

				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/mertcan.jpeg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Hızlı Teslim!</h4>
						<span>Mertcan Yerlikaya</span>
						<p>
							İstediğim şekilde hızlı ve güzel bir web sitesi oluşturdu. Ayrıca, iletişimimiz boyunca her zaman anlayışlıydı. Güzel çalışmaydı ve tekrar birlikte çalışmak umuduyla.
						</p>
					</div>

					<i class="icofont-quote-right"></i>
				</div>



				<div class="testimonial-block style-2  gray-bg">
					<div class="testimonial-thumb">
						<img src="images/metin.jpeg" alt="" class="img-fluid">
					</div>

					<div class="client-info">
						<h4>Tasarımları Çok Hoştu!</h4>
						<span>Metin Kara</span>
						<p class="mt-4">
							Psikolojik danışmanlık web sitesi için beraber çalıştık. Olduça samimi yaklaştı. Tasarımı çok hoşuma gitti. Logo da tasarlayabilirim diyince onu da hediye etti.
						</p>
					</div>
					<i class="icofont-quote-right"></i>
				</div>


			</div>
		</div>
	</div>
</section>

<?php
require_once "footer.php";
?>