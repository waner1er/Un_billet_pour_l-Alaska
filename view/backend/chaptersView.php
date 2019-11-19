
<?php $title = 'Les chapitres '; ?>

<?php ob_start(); ?>


<h2>Liste des chapitres </h2>

    

    <?php
    while ($data = $chapters->fetch())
    {
    ?>


<div class="">
    <div class="chapterEdit">
        <div class=""><h2><?=  $data['title']  ?></h2><?= $data['creation_date_fr'] ?></div>
    </div>

    <div class="col-lg-12">
        <a href="index.php?action=editChapterView&amp;id=<?= $data['id'] ?>" class="btn btn-success"/>Consulter</a>
    </div>
</div>

<hr>

    <?php
    }
    ?>
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
