<?php $title = 'ADMIN'; ?>
<?php ob_start(); ?>
<div id="disconnect" class="row">
     <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
        <a  href="index.php?action=disconnect">Se déconnecter</a>
      </div>  
</div>
<!--MENU-->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Rédiger un nouveau chapitre</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#chapters">Les chapitres</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#comments">Les commentaires</a>
  </li>

  
</ul>

<!--Accueil-->


<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="home">
    <div class="container">
    <form action="index.php?action=addChapter" method="post">
      <h2 style="text-align: center;">Rédiger un nouvau chapitre</h2>
      <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="author" name="title" />
      </div>

      <div>
        <label for="id"></label><br />
        <textarea class="mytextarea" name="content" ></textarea>
      </div>
      
      <div>
        <input type="submit" />
      </div>

    </form>
  </div>
</div>

<!------------>

<!--Les chapitres-->

<div class="tab-pane fade" id="chapters">
<h2>Liste des chapitres </h2>

    <div id="disconnect" class="row">
      <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
      <a  href="index.php?action=disconnect">Se déconnecter</a>
      </div>
    </div>

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

        <div class="col-lg-2">

        <h2>Modifier un chapitre</h2>
<div class="toggle">
    <div class="more">
    <form action="" method="post">
            <div>
              <label for="author">Auteur</label><br />
              <input type="text" id="author" name="author" />
              </div>

            <div>
                <label for="comment">Commentaire</label><br />
                <textarea class="mytextarea" name="content" ></textarea>                </div>
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
    $chapters->closeCursor();
    ?>
</div>
 
<!--Les commentaires-->
 <div class="tab-pane fade" id="comments">
 <h2>Liste des commentaires </h2>
 <table class="table">
   <thead>
     <tr>
       <th>Titre</th>
       <th>Commentaire</th>
       <th>nombre de signalements</th>
       <th>censuré</th>
       <th></th>
  </trait>
   </thead>
   <tbody>
    <?php

    while ($data = $comments->fetch())
    {
    ?>
    <tr>

      <td>
        <a href="index.php?action=post&id=<?= $data["post_id"] ?>" class="btn btn-info"><?= $data["title"] ?></a>  
      </td>
      <td>
        <?= $data["comment"] ?></td>
      <td>

      </td>
      <td>
      <td>
        <a href="#" class="btn btn-danger">Modérer</a>
        </td>
     </tr>
    <?php
    }
    $comments->closeCursor();
    ?>
   </tbody>
 </table>
 </div>
<!------------------------>


<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>