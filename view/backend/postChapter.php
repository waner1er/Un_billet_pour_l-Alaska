<?php $title = htmlspecialchars($chapter['title']); ?>

<?php ob_start(); ?>

        

<div id="chapters" class="alert-light">
    <h3>
        <?= htmlspecialchars($chapter['title']) ?>
        <em>le <?= $chapter['creation_date_fr'] ?></em>
    </h3>
    
    <p>
        <?= nl2br($chapter['content']) ?>
    </p>
</div>

</div>
    <div>
<div  class="btn btn-info col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
            <a  href="index.php?action=admin">Retour à la liste des articles </a>
        </div>
<hr>
<form action="index.php?action=updateChapter" method="post">
    <div>
        <label for="title">Titre du Chapitre</label>x<br />
        <input type="text" id="title" name="title" />
    
        <label for="comment">Chapitre</label><br />
        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>



<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>

