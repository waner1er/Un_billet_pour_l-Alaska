<?php ob_start(); ?>
	<div id="mentions">
	<section class="mb-4">

		<!--Section heading-->
		<img src="public/images/L&H.gif" width="150px;" alt="">

	    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez moi !</h2>
	    <!--Section description-->
		
	    <a href="mailto:J-Forteroche@Caramail.fr" class="btn btn-success"href=""><i style = "color:#fff;"class="fas fa-paper-plane"> Envoyer un mail</i></a>
	        
	</section>

<?php $content = ob_get_clean(); ?>


<?php require 'view/frontend/template.php' ?>
