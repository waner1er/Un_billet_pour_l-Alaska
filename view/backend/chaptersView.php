
<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>


<h2>Liste des chapitres </h2>

    

    <?php
    while ($data = $chapters->fetch())
    {
    ?>


    <div class="ad minMenu">
        <div class="card  mb-3 chapterEdit">
          <div class="card-header"><h2><?=  $data['title']  ?></h2><?= $data['creation_date_fr'] ?></div>
          <div class="card-body">
              <p class="card-title"></p>
              <p class="card-text"><?=  $data['title']  ?></p>
              <p class="card-text"><?=  $data['content']  ?></p>
        </div>

        <div class="col-lg-12">

        <h2>Modifier un chapitre</h2>
<div class="toggle">
    <div class="more">
    <form action="" method="post" >
            <div>
              <label for="author">Auteur</label><br />
              <input type="text" id="author" name="author" />
              </div>

            <div >
                <label for="comment">Commentaire</label><br />
                <textarea class="mytextarea" name="content" ><?=  $data['content']  ?></textarea>                </div>
                <div>
                <input type="submit" />
            </div>
        </form>      </div>
    
    <div class="less">
        <a class="btn btn-success button-read-more button-read" href="#read">Modifier</a>
        <a class="btn btn-danger button-read-less button-read" href="#read">Fermer</a>
    </div>
</div>
        </div>
    </div>
    <hr>
</div>

    <?php
    }
    ?>
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
