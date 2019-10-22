
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
<div class="error">
	<h1>ERROR !! ERROR !!</h1>

<p><?php echo $e->getMessage(); ?></p>

</div><?php 

?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>