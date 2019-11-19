<?php $title = 'ADMIN' ?>

<?php ob_start(); ?>

<p><a href="index.php">Retour à la liste des billets</a></p>

<div id="chapters" class="alert-light">
    <h2>
        <?= htmlspecialchars($post['title']) ?>
        <em>le <?= $post['creation_date_fr'] ?></em>
</h2>
    
    <p>
        <?= nl2br(htmlspecialchars($post['content'])) ?>
    </p>
</div>

<form action="index.php?action=#&amp;id=<?= $post['id'] ?>" method="post">
    <div>
        <label for="#">Modifier</label><br />
    </div>

        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>