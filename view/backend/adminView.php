<?php $title = 'ADMIN'; ?>

<?php ob_start(); ?>
<div id="disconnect" class="row">
  <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
    <a  href="index.php?action=disconnect">Se déconnecter</a>
  </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Titre du chapitre</th>
      <th scope="col">Contenu du chapitre</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php

?>
<tbody>
    <tr class="table-active">
      <th scope="row"><?='creation_date_fr'?></th>
      <td><?= 'creation date' ?></td>
      <td><?= 'title' ?></td>
      <td><?='content' ?></td>
      <td><a href="index.php?action=chapter&amp;id=<?= 'id' ?>">modifier</a></td>

    </tr>
</tbody>
</table>



<form action="#" method="post">
  <h2 style="text-align: center;">Ajouter un chapitre</h2>
    <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>