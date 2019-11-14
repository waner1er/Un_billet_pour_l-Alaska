<?php $title = 'Les commentaires '; ?>

<?php ob_start(); ?>


 <h2>Liste des commentaires </h2>
 <table class="table">
   <thead>
     <tr>
       <th>Titre</th>
       <th>Auteur</th>
       <th>Commentaire</th>
       <th>nombre de signalements</th>
       <th>censuré</th>
       <th></th>
  </trait>
   </thead>
   <tbody>
    <?php

    while ($data = $comments->fetch())
    {
    ?>
    <tr>

      <td>
        <a href="index.php?action=post&id=<?= $data["post_id"] ?>" class="btn btn-info"><?= $data["title"] ?></a>  
      </td>
      <td>
        <?= $data["author"] ?>
        </td>
      <td>
      <?= $data["comment"] ?></td>

      </td>
      <td>
      <div ></div><p  class="alert-danger"><?= $data["signaled"] ?></p>
      <td>

    </td>
            <td>
        <div class="custom-control custom-switch">
      <input type="checkbox" name="" value="0">
      <label >Modérer</label>
    </div>

        </td>
     </tr>
    <?php
    }
    $comments->closeCursor();
    ?>
   </tbody>
 </table>



 <?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
