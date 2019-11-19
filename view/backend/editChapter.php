
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
            
</div>

        
<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Supprimer</button>
 
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <p>Voulez vous vraiment modifier ce chapitre ?&hellip;</p>
</div>  
        <div class="modal-footer">

        <a href="index.php?action=eraseChapter&amp;id=<?= $post['id'] ?>" class="btn btn-danger deleteConfirm">Oui, je supprime</a>
      <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Non</button>
      </div>

        </button>
    </div>
  </div>
</div>

        <?php $content = ob_get_clean(); ?>

<?php require('view/backend/adminTemplate.php'); ?>
