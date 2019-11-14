<?php $title = 'ADMIN'; ?>


<?php ob_start(); ?>
<div class="jumbotron">
<h1>Administration</h1>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
