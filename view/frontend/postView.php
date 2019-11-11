<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="jumbotron">
  <h1 class="display-3">Billet simple pour l'Alaska</h1>
  <h1 class="display-3">Jean Forteroche</h1>

  <h3 class="lead">Une épopée tragique au coeur du grand froid</h3>
</div>

<p><a href="index.php">Retour à la liste des billets</a></p>

<div id="titleChap" class="alert-light">
    <h2>
        <?=($post['title']) ?><br>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h2>
    
    <p >
        <?= nl2br($post['content']) ?>
    </p>
</div>
<div>
  
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Ajouter un commentaire
  </button>
</div>
<div class="collapse" id="collapseExample">
<div class="alert alert-dismissible alert-secondary">
  <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>
  <div class="">
  <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
    
        <label for="comment">Commentaire</label><br />
        
<textarea id="mytextarea" name="comment" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>  </div>
</div>
<h2>Commentaires</h2>



<?php
while ($comment = $comments->fetch())
{
?>
<div class="alert alert-dismissible alert-secondary">
<h5 class="text-info">
      <strong>
          <?= htmlspecialchars($comment['author']) ?>
      </strong>
      le <?= $comment['comment_date_fr'] ?>
</h5>

<p>
    <?= ($comment['comment']) ?><br>
</p>        
</div>
    
    

<?php

}
$comments->closeCursor();

?>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

