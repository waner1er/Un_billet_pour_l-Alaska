<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
   

    <div class="row">
        <button class="btn btn-success"><a href="index.php">Retour à la liste des chapitres</a></button>
    </div>

    <div id="titleChap" class="alert-light">
        <h2>
            <?=($post['title']) ?><br>
            
        </h2>
        <em>le <?= $post['creation_date_fr'] ?></em>
        <p >
            <?= nl2br($post['content']) ?>
        </p>
        <a class="btn btn-warning" href="index.php?action=editChapterView&id=<?= $post['id']?>">Modifier le chapitre</a>

    </div>
  
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ajouterCollapse" aria-expanded="false" aria-controls="collapseExample">
        Ajouter un commentaire
    </button>


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
    if ($comment['censored'] == 0){ 
    ?>    
        <p class="comment">
            <?= htmlspecialchars($comment['comment']) ?></p>
        <a class="btn btn-danger signal" href="index.php?action=signal&amp;id=<?=$comment["id"]?>&amp;postId=<?=$post["id"]?>">Signaler</a>
        (<?= ($comment['nb_signalements']) ?>   )

    
    <?php }
    else{
        print_r('<div  class="censored ">
                    <iframe style="margin:auto" src="https://giphy.com/embed/23BST5FQOc8k8" width="150" height="75" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                    <br> <h4>Ce commentaire à été modéré  </h4>
                </div>');
    }
    ?>
  



<?php } $comments->closeCursor(); ?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

