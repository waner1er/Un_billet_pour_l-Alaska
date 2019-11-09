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
    <a class="nav-link active" data-toggle="tab" href="#home">Administration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#chapters">Le chapitres</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#comments">Modération des commentaires</a>
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
        <textarea id="mytextarea" name="content" ></textarea>
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
            <a href="index.php?action=postChapter&amp;id=<?= $data['id'] ?>" class="btn btn-info btn-lg">Modifier</a>
        </div>
    </div>
    <hr>
</div>

    <?php
    }
    $chapters->closeCursor();
    ?>

 

</div>
<!------------------------>

<!--commenaires-->
<div class="tab-pane fade" id="comments"> 
      <div class="tab-pane fade active show" id="comments">
        
</div>

<!-------------------->

<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>