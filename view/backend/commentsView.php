<?php $title = 'Les commentaires '; ?>

<?php ob_start(); ?>


 <h2>Liste des commentaires </h2>
 <div class="row commentAdmin">
 
  <?php

while ($data = $comments->fetch())
{
?>
    
<ul class="card ">

  <div class="card-header">
    <li  scope="row"><a><h2>Titre : <?= $data["title"] ?></h2></a></li>
    <li>Auteur : <?= $data["author"] ?></li>
  </div>

  <div class="card-body ">
    <li>
      <div><h5> Commentaire : </h5></div>
      <div><p><?= $data["comment"] ?></p></div>
    </li>
    <hr>

    <div class="row commentsDetails "> 
      <li>Nombre de signalements (<?= $data["nb_signalements"] ?>)</li>
      <li>
        Etat de publication : <?php
        if(($data["censored"]) == 0) {
        print_r('Publié');} else {print_r('Modéré');}?>
      </li>
    </div>

  </div>

  <div class="card-footer " >
    <li><a class='btn btn-danger' href="index.php?action=moderate&amp;id=<?=$data['id']?>">Modérer</a></li>
    <li><a class='btn btn-success' href="index.php?action=publish&amp;id=<?=$data['id']?>">Publier</a></li>
  </div>  

</ul>
    
    <?php
    }
    $comments->closeCursor();
    ?>
  </tbody>
  </table>

 <?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
