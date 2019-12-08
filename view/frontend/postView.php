<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
    <div class="row">
<div class="col-3"></div>
<div style="text-align:center;"class="col-6">
<h2 >
                <?=($post['title']) ?><br>
                
            </h2>
            <em>le <?= $post['creation_date_fr'] ?></em>
            <p >
</div>
<div class="col-3"></div>

    </div>
   
<div class="row">

    <div class="col-lg-10">

        <div id="titleChap" class="alert-light">
            
                <?= nl2br($post['content']) ?>
            </p>
            <a class="btn btn-warning" href="index.php?action=editChapterView&id=<?= $post['id']?>">Modifier le chapitre</a>
            <a class="btn btn-success" href="index.php?action=listPosts">retour à la liste des chapitres</a>

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

        <?php while ($comment = $comments->fetch()): ?>



        <?php if ($comment['censored'] == 0): ?>    
            
            <div class="comment">
                <div><?= $comment['author'] ?></div>
                <div><?= $comment['comment'] ?></div>
            <a class="btn btn-danger signal" href="index.php?action=signal&amp;id=<?=$comment["id"]?>&amp;postId=<?=$post["id"]?>">Signaler</a>
            (<?= ($comment['nb_signalements']) ?>   )
            </div>

        
        <?php else: ?>
            <div  class="censored ">
                        <iframe style="margin:auto" src="https://giphy.com/embed/23BST5FQOc8k8" width="150" height="75" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                        <br> <h4>Ce commentaire à été modéré  </h4>
                    </div>
                    
        <?php endif; ?>
    



    <?php endwhile;$comments->closeCursor(); ?></div>



    <div class="col-lg-2" style="padding:0;">
        <nav class="navbar navbar-expand-lg col-lg-12 sommaireSide">
           
            <div class="collapse navbar-collapse" id="navbarColor0">
                <div class="card border-light mb-3">
                    <h2 style="text-align:center">Sommaire</h2>
                    <div class="card-body">
                    </div>
            <?php while ($data = $posts->fetch()): ?> 
            <a href="index.php?action=post&amp;id=<?= $data['id']?>">
            <p class="card-title sommaireTitle"> <?= ($data['title']) ?></h4>
            </a>

            <?php endwhile; $posts->closeCursor(); ?>           
                </div>
            </div>
        </nav>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

