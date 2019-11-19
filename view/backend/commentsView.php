<?php $title = 'Les commentaires '; ?>

<?php ob_start(); ?>


 <h2>Liste des commentaires </h2>
 <div class="row">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Commentaire</th>
      <th scope="col">signalements</th>
      <th scope="col">censuré ?</th>
      <th scope="col">Modérer</th>
    </tr>
  </thead>
  <tbody>
  <?php

while ($data = $comments->fetch())
{
?>
    <tr>
      <th scope="row"><a ><?= $data["title"] ?></a></th>
      <td><?= $data["author"] ?></td>
      <td><?= $data["comment"] ?></td>
      <td><?= $data["nb_signalements"] ?></td>
      <td><?=$data["nb_signalements"] ?></td>
      <td><a class='btn btn-danger' href="index.php?action=moderate">Modérer</a></td>
    </tr>
    <?php
    }
    $comments->closeCursor();
    ?>
  </tbody>
  </table>

 <?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
