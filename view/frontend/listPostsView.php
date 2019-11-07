<?php $title = 'Billet Simple pour l\'alaska;' ?>

<?php ob_start(); ?>
<div class="jumbotron">
  <h1 class="display-3">Billet simple pour l'Alaska</h1>
  <h1 class="display-3">Jean Forteroche</h1>

  <h3 class="lead">Une épopée tragique au coeur du grand froid</h3>
</div>


<h2>Liste des chapitres</h2>
<p>Derniers billets du blog :</p>


<?php
while ($data = $posts->fetch())
{
?><a  href="index.php?action=post&amp;id=<?= $data['id']?>">
    <div id="chapterBckgrnd">
      <div id="chapter_main" class="alert-light">
        <h1 style="color: #000">
            <?= ($data['title']) ?> 
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h1>

        <p><?= nl2br($data['content']) ?>        </p>

    </div>
            </a>
    </div>

    


<?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>