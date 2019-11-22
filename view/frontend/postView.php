<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="jumbotron">
  <h1 class="display-3">Billet simple pour l'Alaska</h1>
  <h1 class="display-3">Jean Forteroche</h1>

  <h3 class="lead">Une épopée tragique au coeur du grand froid</h3>
</div>
<div class="row">
<button class="btn btn-success"><a href="index.php">Retour à la liste des chapitres</a></button>
</div>
<div id="titleChap" class="alert-light">
    <h2>
        <?=($post['title']) ?><br>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h2>
    
    <p >
        <?= nl2br($post['content']) ?>
    </p>
</div>

  
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ajouterCollapse" aria-expanded="false" aria-controls="collapseExample">
    Ajouter un commentaire
  </button>
</div>
<div class="collapse" id="ajouterCollapse">
    <div class="alert alert-dismissible alert-secondary">
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
              <label for="author">Auteur</label><br />
              <input type="text" id="author" name="author" />
              </div>

            <div>
                <label for="comment">Commentaire</label><br />
                <textarea class="comArea" name="comment" ></textarea>
                </div>
                <div>
                <input type="submit" />
            </div>
        </form>  
    </div>
</div>

<h2>Commentaires</h2>



<?php
while ($comment = $comments->fetch())
{
?>

<?php
if ($comment['censored']==0){
?>    <p class="comment">
    <?= $comment['comment'] ?>
    </p> <?php }
else{
    print_r(' <div  class="censored ">
                <iframe style="margin:auto" src="https://giphy.com/embed/23BST5FQOc8k8" width="150" height="75" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                <br> <h4>Ce commentaire à été modéré  </h4>
            </div>');
}
?>
   <a class='btn btn-danger' href="index.php?action=signal&amp;id=<?=$comment['id']?>">Signaler</a></td>

  
   (<?= ($comment['nb_signalements']) ?>  )

    </div>
</div>
</div>

</div>

<?php

}
$comments->closeCursor();

?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

