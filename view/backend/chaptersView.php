
<?php $title = 'Les chapitres '; ?>

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

        <h2>Modifier Ce chapitre</h2>
<div class="toggle">
    <div class="more">
    <form action="index.php?action=updateChapter" method="post" >
            

            <div >
                
                <textarea class="mytextarea" name="content" ><?=  $data['content']  ?></textarea>                </div>
                <div>
                    <br>
                <input class="btn btn-success"type="submit" value="Modifier" />
            </div>
        </form>      </div>
    
    
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
