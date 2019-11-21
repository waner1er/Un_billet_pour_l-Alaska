<?php $title = 'Nouveau chapitre'; ?>


<?php ob_start(); ?>



<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="home">
    <div class="container">
    <form action="index.php?action=addChapter" method="post">
      <h2 style="text-align: center;">Rédiger un nouvau chapitre</h2>
      <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="title" name="title" />
      </div>

      <div>
        <label for="id"></label><br />
        <textarea class="mytextarea" name="content" ></textarea>
      </div>
      
      <div>
      <br>
        <input class="btn btn-success" type="submit" />
      </div>

    </form>
  </div>
</div>

<div class="tab-pane fade" id="comments">
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
 </div>


<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
