<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<p><a href="index.php?action=adminView">Retour à la page d'administration</a></p>

<form action="index.php?action=postChapter&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>



<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>

