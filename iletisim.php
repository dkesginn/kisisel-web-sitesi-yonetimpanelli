<?php
require_once "header.php";
?>


<h1 class="text-capitalize text-lg text-center">İletişim</h1>



<section class="section contact-info pb-0 mb-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-md-6">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-live-support"></i>
					<h5>Telefon Numarası: </h5>
					<?php echo $ayarcek['telefon'] ?>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-6">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-support-faq"></i>
					<h5>Email</h5>
					<?php echo $ayarcek['mailadres'] ?>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-md-6">
				<div class="contact-block mb-4 mb-lg-0">
					<i class="icofont-location-pin"></i>
					<h5>Adres</h5>
					<?php echo $ayarcek['adres'] ?>
				</div>
			</div>
		</div>
	</div>
</section>




<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22719.926215570365!2d28.792752590298115!3d41.050075744755105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4102814e62d%3A0xf17358ce73944614!2zS8O8w6fDvGvDp2VrbWVjZS_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1686571683643!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<?php
require_once "footer.php";
?>