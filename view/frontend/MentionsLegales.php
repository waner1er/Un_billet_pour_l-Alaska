<?php ob_start(); ?>

<div id="mentions">
<h1>MENTIONS LEGALES</h1> <br>
	<h1>FORTEROCHE Jean</h1>
	<h1>J.Forteroche@Caramail.fr</h1>
	<h1>8 Rue des Glacières</h1>
	<h1>67000 Strasbourg</h1>
</div>


<?php $content = ob_get_clean(); ?>


<?php require 'view/frontend/template.php' ?>
