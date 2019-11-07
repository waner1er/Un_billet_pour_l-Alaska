<?php $title = 'ADMIN'; ?>

<?php ob_start(); ?>
<div id="disconnect" class="row">
  <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
    <a  href="index.php?action=disconnect">Se déconnecter</a>
  </div>
</div>

<?php
while ($data = $chapters->fetch())
{
?>
    <div class="ad minMenu">
      <div class="card text-white bg-info mb-3 chapterEdit">
        <div class="card-header">Chapitre <?= $data['id'] ?></div>
        <div class="card-body">
          <p class="card-title"><?= $data['creation_date_fr'] ?></p>
          <p class="card-text"><?=  $data['title']  ?></p>
          <p class="card-text"><?=  $data['content']  ?></p>
        </div>
      </div>
    </div>



<?php
}
$chapters->closeCursor();
?>



<form action="index.php?action=addChapter" method="post">
  <h2 style="text-align: center;">Ajouter un chapitre</h2>
    <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="author" name="title" />
    </div>
    <div>
        <label for="id"></label><br />
        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>