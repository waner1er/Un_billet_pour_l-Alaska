<?php $title = 'ADMIN'; ?>

<?php ob_start(); ?>
<section>
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
      <div class="card  mb-3 chapterEdit">
        <div class="card-header"><h2><?=  $data['title']  ?></h2><?= $data['creation_date_fr'] ?></div>
        <div class="card-body">
          <p class="card-title"></p>
          <p class="card-text"><?=  $data['title']  ?></p>
          <p class="card-text"><?=  $data['content']  ?></p>
        </div>
<div class="col-lg-2"><a href="index.php?action=postChapter&amp;id=<?= $data['id'] ?>" class="btn btn-info btn-lg">Modifier</a>
</div>
      </div>
<hr>
    </div>



<?php
}
$chapters->closeCursor();
?>

<div class="container">
<form action="index.php?action=addChapter" method="post">
  <h2 style="text-align: center;">Rédiger un nouvau chapitre</h2>
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
</div>
</section>

<section>
  <div class="alert-info">
    <h1>info</h1>
    <h1>info</h1>
    <h1>info</h1>
    <h1>info</h1>
  </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>