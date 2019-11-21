
<?php $title = 'Les chapitres '; ?>

<?php ob_start(); ?>
<div class="row">
    <div class="col-sm-12"><h2 style="text-align:center;">Liste des chapitres </h2></div>
    

    <?php
    while ($data = $chapters->fetch())
    {
    ?>

        <div class="chapterEdit row">
            <div class="col-sm-10"><h2><?=  $data['title']  ?></h2><?= $data['creation_date_fr'] ?></div>
            <div class="">
                <a href="index.php?action=editChapterView&amp;id=<?= $data['id'] ?>" class="btn btn-success"/>Consulter</a>
            </div>
        </div>    
    

    

<hr>

    <?php
    }
    ?>
<?php $content = ob_get_clean(); ?>
</div>
<?php require('adminTemplate.php'); ?>
