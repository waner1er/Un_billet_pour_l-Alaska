
<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

<h2>Modifie le chapitre</h2>
<div>
<div class="card-header"><h2><?=  $post['title']  ?></h2><?= $post['creation_date_fr'] ?></div>

    <form action="index.php?action=updateChapter&amp;id=<?=$post['id']?>" method="post" >
                

                <div >
                    <textarea class="mytextarea" name="content" ><?=  $post['content']  ?></textarea>                </div>
                    <div>
                        <br>
                    <input class="btn btn-success"type="submit" value="Modifier" />
                </div>
    </form>
            <a href="index.php?action=eraseChapter&amp;id=<?= $post['id'] ?>" class="btn btn-danger"/>supprimer</a>

</div>

        


        <?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>
