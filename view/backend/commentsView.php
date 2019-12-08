<?php $title = 'Les commentaires '; ?>

<?php ob_start(); ?>


  <h2>Liste des commentaires </h2>
  <div class="row commentAdmin">

    <?php
    while ($data = $comments->fetch()):
    ?>

    <ul class="card ">

      <div class="card-header">
        <li  scope="row">
          <a><h2>Titre : <?= $data["title"] ?></h2></a>
        </li>
        <li>Auteur : <?= $data["author"] ?></li>
      </div>

      <div class="card-body ">
        <li>
          <div><h5> Commentaire : </h5></div>
          <div><p><?= htmlspecialchars($data["comment"])?></p></div>
        </li>

        <hr>

        <div class="row commentsDetails ">

        <?php if(($data["nb_signalements"]) == 0) : ?>
          <li><p> Nombre de signalements : <span class="badge badge-pill badge-success"> <?= $data["nb_signalements"] ?></span></p></li>
          
          <?php else : ?>
            <li><p> Nombre de signalements : <span class="badge badge-pill badge-danger"> <?= $data["nb_signalements"] ?></span></p></li>
        <?php endif; ?>

          <?php if (($data["censored"]) == 0) : ?>
            <li><p class="text-success">Publié</a></p></li>

        <?php else : ?>
          <li><p class="text-danger">Modéré</a></p></li>

        <?php endif; ?>
        </div>

      </div>
      

      <div class="card-footer " >

        <?php if (($data["censored"]) == 0) : ?>
        <li><a class='btn btn-danger' href="index.php?action=moderate&amp;id=<?=$data['id']?>">Modérer</a></li>

        <?php else : ?>
        <li><a class='btn btn-success' href="index.php?action=publish&amp;id=<?=$data['id']?>">Publier</a></li>

        <?php endif; ?>

      </div>  

    </ul>

  <?php
  endwhile;
  $comments->closeCursor();
  ?>

 <?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
