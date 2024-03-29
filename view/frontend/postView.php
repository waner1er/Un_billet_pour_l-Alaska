<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<div class="jumbotron">
  <h1 class="display-3">Billet simple pour l'Alaska</h1>
  <h1 class="display-3">Jean Forteroche</h1>

  <h3 class="lead">Une épopée tragique au coeur du grand froid</h3>
</div>

<p><a href="index.php">Retour à la liste des billets</a></p>

<div id="chapters" class="alert-light">
    <h3>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
    </h3>
    
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<h2>Commentaires</h2>

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
</form>

<?php
while ($comment = $comments->fetch())
{
?>
    <div class="card border-info">
        <h5 class="text-info">
            <strong>
                <?= htmlspecialchars($comment['author']) ?>
            </strong>
            le <?= $comment['comment_date_fr'] ?>
        </h5>
        <p>
            <?= ($comment['comment']) ?><br>
        </p>
        <a href="index.php?action=editComment">Modifier</a>
            
        
    </div>
    

<?php

}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

