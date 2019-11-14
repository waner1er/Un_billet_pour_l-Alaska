<?php $title = 'ADMIN'; ?>


<?php ob_start(); ?>
<div class="jumbotron">
<h1>Administration</h1>
</div>
<a class="alert-info"href="index.php?action=writeChapter">Rédiger un nouvel article</a>
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
