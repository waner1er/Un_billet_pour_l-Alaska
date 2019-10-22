<?php ob_start(); ?>

<div id="mentions">
<h1>MENTIONS LEGALES</h1> <br>
	<h2>FORTEROCHE Jean</h2>
	<h2>J.Forteroche@Caramail.fr</h2>
	<h2>8 Rue des Glacières</h2>
	<h2>67000 Strasbourg</h2>
</div>


<?php $content = ob_get_clean(); ?>


<?php require 'view/frontend/template.php' ?>
